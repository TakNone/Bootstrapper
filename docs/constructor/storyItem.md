# storyItem

**Description** : *Represents a story*

**Layer** : 216

```tl
storyItem#edf164f1 flags:# pinned:flags.5?true public:flags.7?true close_friends:flags.8?true min:flags.9?true noforwards:flags.10?true edited:flags.11?true contacts:flags.12?true selected_contacts:flags.13?true out:flags.16?true id:int date:int from_id:flags.18?Peer fwd_from:flags.17?StoryFwdHeader expire_date:int caption:flags.0?string entities:flags.1?Vector<MessageEntity> media:MessageMedia media_areas:flags.14?Vector<MediaArea> privacy:flags.2?Vector<PrivacyRule> views:flags.3?StoryViews sent_reaction:flags.15?Reaction albums:flags.19?Vector<int> = StoryItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.5?true`](type/true) | Whether this story is pinned on the user's profile |
| **public** | [`flags.7?true`](type/true) | Whether this story is public and can be viewed by everyone |
| **close_friends** | [`flags.8?true`](type/true) | Whether this story can only be viewed by our close friends, see here » for more info |
| **min** | [`flags.9?true`](type/true) | Full information about this story was omitted for space and performance reasons; use stories.getStoriesByID to fetch full info about this story when and if needed |
| **noforwards** | [`flags.10?true`](type/true) | Whether this story is protected and thus cannot be forwarded; clients should also prevent users from saving attached media (i.e. videos should only be streamed, photos should be kept in RAM, et cetera) |
| **edited** | [`flags.11?true`](type/true) | Indicates whether the story was edited |
| **contacts** | [`flags.12?true`](type/true) | Whether this story can only be viewed by our contacts |
| **selected_contacts** | [`flags.13?true`](type/true) | Whether this story can only be viewed by a select list of our contacts |
| **out** | [`flags.16?true`](type/true) | indicates whether we sent this story |
| <mark>id</mark> | [`int`](type/int) | ID of the story |
| <mark>date</mark> | [`int`](type/int) | When was the story posted |
| **from_id** | [`flags.18?Peer`](type/Peer) | Sender of the story |
| **fwd_from** | [`flags.17?StoryFwdHeader`](type/StoryFwdHeader) | For reposted stories », contains info about the original story |
| <mark>expire_date</mark> | [`int`](type/int) | When does the story expire |
| **caption** | [`flags.0?string`](type/string) | Story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | Story media |
| **media_areas** | [`flags.14?Vector<MediaArea>`](type/MediaArea) | List of media areas, see here » for more info on media areas |
| **privacy** | [`flags.2?Vector<PrivacyRule>`](type/PrivacyRule) | Privacy rules indicating who can and can't view this story |
| **views** | [`flags.3?StoryViews`](type/StoryViews) | View date and reaction information |
| **sent_reaction** | [`flags.15?Reaction`](type/Reaction) | The reaction we sent |
| **albums** | [`flags.19?Vector<int>`](type/int) | Albums this story is part of |

---

## Type

[StoryItem](type/StoryItem)

---

## Example

```php
$storyItem = $client->storyItem(
	pinned : true,
	public : true,
	close_friends : true,
	min : true,
	noforwards : true,
	edited : true,
	contacts : true,
	selected_contacts : true,
	out : true,
	id : 51,
	date : 45,
	from_id : $client->peerUser(
		user_id : -5071746019843039507,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -3802475834357862119,
		),
		from_name : 'lZyX60p9c1FPIwB5',
		story_id : 59,
	),
	expire_date : 13,
	caption : 'IlYwfZCHhe0LnQWE',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 39,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 84,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 44,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 89,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 67,
			language : 'pRmTjC2rcgoQlNve',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 42,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : 2544256165206381085,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 55,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 24,
			document_id : -5674976220734179348,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 17,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1018230.017578125,
				y : -1539023.3642578125,
				w : -921830.0302734375,
				h : 1473541.69921875,
				rotation : 212356.501953125,
				radius : 1114654.830078125,
			),
			geo : $client->geoPointEmpty(),
			title : '5A8qNruFjmfo4pVh',
			address : 'ezulM1BU5RVSys3G',
			provider : 'YQHw0VKs71Z2ebPU',
			venue_id : 'fMvL3pK96nB5lAhu',
			venue_type : 'gwDtr96MmdVapzn5',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1347899.27734375,
				y : 1511376.0205078125,
				w : -1477468.6884765625,
				h : 367411.5771484375,
				rotation : -1358697.263671875,
				radius : -1863657.3154296875,
			),
			query_id : -6233069452633338565,
			result_id : 'oV8xcnIWk6lrQhLi',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 764890.2744140625,
				y : 905946.0849609375,
				w : 1218959.8095703125,
				h : 1855874.33203125,
				rotation : 1678844.1572265625,
				radius : 130532.6533203125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'C476xqaUeHdZRrQt',
				state : 'Xu02J76PcpSyTkRU',
				city : 'HXx0t5BQJLfqVACR',
				street : '9TbqeItL1GAUE2kw',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1895847.8818359375,
				y : 374980.814453125,
				w : 1435556.2685546875,
				h : 2083955.3994140625,
				rotation : 786932.8701171875,
				radius : -1031148.7998046875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1988091.2177734375,
				y : -1584974.236328125,
				w : -1034576.2353515625,
				h : 1160459.6142578125,
				rotation : 1597248.7158203125,
				radius : -1189287.6318359375,
			),
			channel_id : 6619348489052863540,
			msg_id : 93,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1078500.083984375,
				y : -626222.642578125,
				w : -162988.697265625,
				h : 845222.5048828125,
				rotation : -903892.3203125,
				radius : -236846.0166015625,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 39,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 770671.2890625,
				y : -1958029.9296875,
				w : 1287513.0869140625,
				h : 857418.0986328125,
				rotation : 2094806.1796875,
				radius : 557797.0224609375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -2018687.416015625,
				y : 2007283.21484375,
				w : 103682.466796875,
				h : -371303.955078125,
				rotation : -188452.0087890625,
				radius : 1512637.513671875,
			),
			emoji : 'x5wfhPmNKEeGzrpq',
			temperature_c : -166415.03515625,
			color : 61,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 257911.453125,
				y : -1882735.791015625,
				w : 101345.3203125,
				h : -1849867.478515625,
				rotation : -116588.5244140625,
				radius : 1473920.40625,
			),
			slug : 'bXJLWUaH0ldKsPBp',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(4476763000081903021),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-940866582436366533),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(794487469146616350),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-765178587877067833),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 26,
		forwards_count : 30,
		reactions : array(
			$client->reactionCount(
				chosen_order : 23,
				reaction : $client->reactionEmpty(...),
				count : 24,
			),
		),
		reactions_count : 15,
		recent_viewers : array(-3095740770596097810),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(42),
);
```