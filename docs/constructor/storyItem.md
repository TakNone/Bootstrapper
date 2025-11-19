# storyItem

**Description** : *Represents a story*

**Layer** : 218

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
	id : 93,
	date : 69,
	from_id : $client->peerUser(
		user_id : -5673988910141167822,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -3522718773682253422,
		),
		from_name : 'MnE1yIPdohO8vqrm',
		story_id : 69,
	),
	expire_date : 55,
	caption : 'X5nSRd96gfyMzqVE',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 8,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 57,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 0,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 82,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : 'T63VmhByf2vr9jnE',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 92,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : -4512601588488380345,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 27,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 23,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 92,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 20,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 53,
			document_id : 315727876928930721,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 69,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1027147.541015625,
				y : -951168.0400390625,
				w : -1963233.1875,
				h : -395919.4521484375,
				rotation : 57798.0439453125,
				radius : -1233633.578125,
			),
			geo : $client->geoPointEmpty(),
			title : 'xPotDcXGZMuWVzOr',
			address : 'gcQuk5rmd6A4o9LK',
			provider : 'VAayIW5sO2BSf68t',
			venue_id : 'U5Af0HIqvpcFO3Dy',
			venue_type : 'NzgCPj0xnTyMmU43',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1381910.9150390625,
				y : -1601836.869140625,
				w : 962126.5390625,
				h : -67207.0693359375,
				rotation : 1923360.3251953125,
				radius : 72424.7880859375,
			),
			query_id : 7534038817453150605,
			result_id : 'qk1CZ8zHBLcmGVxs',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1203837.962890625,
				y : -537532.2216796875,
				w : 769570.3271484375,
				h : 1482702.490234375,
				rotation : 2004747.6259765625,
				radius : 1065420.435546875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : '0eTrKEyRvnQj8p4C',
				state : 'fmZR3aTzCYjLcrVl',
				city : 'ABcjCMXlGHd2ONst',
				street : 'QmiEbp7GFCL4xylu',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -722912.486328125,
				y : 1255750.263671875,
				w : 1904834.8447265625,
				h : 37593.11328125,
				rotation : 2021621.6640625,
				radius : 1170017.9248046875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1358419.1884765625,
				y : 1238491.70703125,
				w : -914131.1484375,
				h : 110367.39453125,
				rotation : 1168021.3310546875,
				radius : 2003453.1552734375,
			),
			channel_id : -5194394490890675568,
			msg_id : 24,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -952448.1533203125,
				y : -1101303.578125,
				w : -1656521.3720703125,
				h : 1495264.5361328125,
				rotation : -1297263.63671875,
				radius : -1384335.1982421875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 54,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1016200.7412109375,
				y : 1746365.2568359375,
				w : 78571.2890625,
				h : 1150814.283203125,
				rotation : 551116.10546875,
				radius : -1527901.64453125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -994443.9267578125,
				y : 139624.4921875,
				w : 1291888.2099609375,
				h : 795827.208984375,
				rotation : -1687730.0458984375,
				radius : -838808.7021484375,
			),
			emoji : 'FJjasvkqQTreWYPO',
			temperature_c : 2020701.814453125,
			color : 30,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 2021513.43359375,
				y : -150350.0224609375,
				w : -306753.732421875,
				h : -871588.2333984375,
				rotation : 11459.904296875,
				radius : 1064874.24609375,
			),
			slug : 'mcz7w9gqhyZI4dTv',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-4221176376363509474),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(6611421211051160465),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-5310853859170267712),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-7525527310006191257),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 44,
		forwards_count : 57,
		reactions : array(
			$client->reactionCount(
				chosen_order : 36,
				reaction : $client->reactionEmpty(),
				count : 87,
			),
		),
		reactions_count : 35,
		recent_viewers : array(7025745822010642838),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(77),
);
```