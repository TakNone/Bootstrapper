# storyItem

**Description** : *Represents a story*

**Layer** : 211

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
| **albums** | [`flags.19?Vector<int>`](type/int) | NOTHING |

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
	id : 79,
	date : 73,
	from_id : $client->peerUser(
		user_id : -9178813496720998465,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -2024725827722464703,
		),
		from_name : 'xhJumRMpa0yDOWB4',
		story_id : 5,
	),
	expire_date : 16,
	caption : '8nzMY1d29UOukPAD',
	entities : array(
		$client->messageEntityUnknown(
			offset : 66,
			length : 98,
		),
		$client->messageEntityMention(
			offset : 53,
			length : 4,
		),
		$client->messageEntityHashtag(
			offset : 13,
			length : 75,
		),
		$client->messageEntityBotCommand(
			offset : 51,
			length : 92,
		),
		$client->messageEntityUrl(
			offset : 34,
			length : 5,
		),
		$client->messageEntityEmail(
			offset : 41,
			length : 17,
		),
		$client->messageEntityBold(
			offset : 18,
			length : 2,
		),
		$client->messageEntityItalic(
			offset : 92,
			length : 95,
		),
		$client->messageEntityCode(
			offset : 17,
			length : 61,
		),
		$client->messageEntityPre(
			offset : 83,
			length : 70,
			language : 'BOIm7CHUe3MQdr5E',
		),
		$client->messageEntityTextUrl(
			offset : 52,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 92,
			length : 43,
			user_id : -339556446971875033,
		),
		$client->inputMessageEntityMentionName(
			offset : 31,
			length : 0,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 44,
			length : 61,
		),
		$client->messageEntityCashtag(
			offset : 43,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 13,
			length : 82,
		),
		$client->messageEntityStrike(
			offset : 11,
			length : 81,
		),
		$client->messageEntityBankCard(
			offset : 84,
			length : 35,
		),
		$client->messageEntitySpoiler(
			offset : 29,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 14,
			length : 52,
			document_id : 943372469726689742,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 54,
			length : 10,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 798035.791015625,
				y : -629654.3974609375,
				w : 942405.20703125,
				h : -2052041.126953125,
				rotation : 1493341.4150390625,
				radius : -860041.921875,
			),
			geo : $client->geoPointEmpty(),
			title : 'CXs52UWoQN3aY7z1',
			address : '7HTSDWJMmaC9rFGg',
			provider : 'fQgWER96siDZjJ30',
			venue_id : 'ZLY5nhTKfNtqowaF',
			venue_type : 'Pj8A1gKNyHbaBZ4d',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1601249.017578125,
				y : 1877398.23828125,
				w : 1689596.1904296875,
				h : -1751247.1416015625,
				rotation : -199649.375,
				radius : 1121534.0400390625,
			),
			query_id : 7297969398951318847,
			result_id : 'fIsojrGEwKSkTpnM',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 489099.8662109375,
				y : 611072.0048828125,
				w : -980043.89453125,
				h : 1669911.4013671875,
				rotation : -725884.0146484375,
				radius : -253580.9326171875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'gotf3xCsXcSKuPm4',
				state : 'gfqOBL6iSjwd2VrD',
				city : 'vu9SA8T6qmJbog7n',
				street : 'WIxN5HjbfawO2o9X',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -255998.8837890625,
				y : -681637.154296875,
				w : 14808.9013671875,
				h : 1085532.8701171875,
				rotation : 117341.3486328125,
				radius : 1363046.3525390625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1016844.5673828125,
				y : 1521319.3935546875,
				w : 171261.29296875,
				h : 393205.1015625,
				rotation : -1648533.73828125,
				radius : 301413.498046875,
			),
			channel_id : 549279222101904585,
			msg_id : 70,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1077079.02734375,
				y : -1690946.55859375,
				w : 1867482.6943359375,
				h : -1546284.478515625,
				rotation : -365889.287109375,
				radius : 1589839.7734375,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 92,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1431584.119140625,
				y : 1238401.412109375,
				w : -1029365.701171875,
				h : -1769240.91796875,
				rotation : 1148849.6025390625,
				radius : -1648641.173828125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -60554.11328125,
				y : 1770791.36328125,
				w : -1875636.939453125,
				h : -56264.048828125,
				rotation : -842440.7861328125,
				radius : -1506919.181640625,
			),
			emoji : '9SFxRJu34zpvrK20',
			temperature_c : 1923366.099609375,
			color : 73,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -408342.841796875,
				y : -788315.6630859375,
				w : 2043409.0703125,
				h : 1430965.41015625,
				rotation : 314819.7529296875,
				radius : -1963797.37890625,
			),
			slug : 'WDhlt8IJCMUk1bvO',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(6742268495160260489),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(1913216106600141042),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(2407177756141066213),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(5124076860705185741),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 36,
		forwards_count : 19,
		reactions : array(
			$client->reactionCount(
				chosen_order : 25,
				reaction : $client->reactionEmpty(...),
				count : 86,
			),
		),
		reactions_count : 2,
		recent_viewers : array(2344789769168622112),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(86),
);
```