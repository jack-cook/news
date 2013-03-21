<?php

/**
* ownCloud - News
*
* @author Alessandro Cosentino
* @author Bernhard Posselt
* @copyright 2012 Alessandro Cosentino cosenal@gmail.com
* @copyright 2012 Bernhard Posselt nukeawhale@gmail.com
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

namespace OCA\News\Bl;

use \OCA\News\Db\Feed;
use \OCA\News\Db\FeedMapper;


class FeedBl extends Bl {

	public function __construct(FeedMapper $feedMapper){
		parent::__construct($feedMapper);
	}


	// README: only call this for the cronjob because it does not
	// check that the feeds belong to the right user
	public function findAll(){
		return $this->mapper->findAll();
	}


	public function findAllFromUser($userId){
		return $this->mapper->findAllFromUser($userId);
	}


	public function create($feedUrl, $parentId, $userId){
		// TODO: download new items of feed
	}


	public function update($feedId, $userId){
		// TODO: update given feed	
	}


	public function move($feedId, $folderId, $userId){
		$feed = $this->find($feedId, $userId);
		$feed->setFolderId($folderId);
		$this->mapper->update($feed);
	}


}