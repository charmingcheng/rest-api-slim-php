<?php

declare(strict_types=1);

namespace App\Service\Note;

//use App\Exception\NoteException;
use App\Service\NoteService;

class DeleteNoteService extends NoteService
{
    public function deleteNote(int $noteId)
    {
        $this->checkAndGetNote($noteId);
//        var_dump($noteId); exit;
        $this->noteRepository->deleteNote($noteId);
        $redisKey = sprintf(self::REDIS_KEY, $noteId);
        $key = $this->redisService->generateKey($redisKey);
        $this->redisService->del($key);
    }
}
