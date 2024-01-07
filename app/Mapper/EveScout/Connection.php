<?php


namespace Exodus4D\ESI\Mapper\EveScout;

use Exodus4D\Pathfinder\Data\Mapper\AbstractIterator;

class Connection extends AbstractIterator {

    /**
     * @var array
     */
    protected static $map = [
        'id'                                => 'id',
        'type'                              => 'signature_type',

        'completed'                         => ['state' => 'name'],
        'updated_at'                        => ['state' => 'updated'],

        'out_system_id'                     => 'source',
        'in_system_id'                      => 'target',

        'out_signature'                     => ['sourceSignature' => 'name'],
        'wh_type'                           => ['sourceSignature' => 'type'],

        'in_signature'                      => ['targetSignature' => 'name'],
        'wh_type'                           => ['targetSignature' => 'type'],

        // 'mass'                           => ['wormhole' => 'mass'], THIS NO LONGER EXISTS
        // 'wormholeEol'                    => ['wormhole' => 'eol'], THIS NO LONGER EXISTS
        'remaining_hours'                   => ['wormhole' => 'estimatedEol'],

        'created_at'                        => 'created',
        'updated_at'                        => 'updated',

        'created_by_id'                     => ['character' => 'id'],
        'created_by_name'                   => ['character' => 'name']
    ];
}