<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\Tagging\Console\Commands;

use App\Suports\Tagging\TaggingUtility;
use App\Suports\Tagging\Model\TagGroup;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class GenerateTagGroup extends Command
{
    protected $name = 'tagging:create-group';

    protected $signature = 'tagging:create-group {group}';

    protected $description = 'Create a laravel tag group';

    public function handle()
    {
        $groupName = $this->argument('group');

        $tagGroup = new TagGroup();
        $tagGroup->name = $groupName;
        $tagGroup->slug = TaggingUtility::normalize($groupName);

        $tagGroup->save();

        $this->info('Created tag group: '.$groupName);
    }

    protected function getArguments()
    {
        return [
            ['group', InputArgument::REQUIRED, 'Name of the group to create.'],
        ];
    }
}
