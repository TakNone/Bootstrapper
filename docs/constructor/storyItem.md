# storyItem

**Description** : *Represents a story*

**Layer** : 227

```tl
storyItem#16a4b93c flags:# pinned:flags.5?true public:flags.7?true close_friends:flags.8?true min:flags.9?true noforwards:flags.10?true edited:flags.11?true contacts:flags.12?true selected_contacts:flags.13?true out:flags.16?true id:int date:int from_id:flags.18?Peer fwd_from:flags.17?StoryFwdHeader expire_date:int caption:flags.0?string entities:flags.1?Vector<MessageEntity> media:MessageMedia media_areas:flags.14?Vector<MediaArea> privacy:flags.2?Vector<PrivacyRule> views:flags.3?StoryViews sent_reaction:flags.15?Reaction albums:flags.19?Vector<int> music:flags.20?Document = StoryItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **music** | [`flags.20?Document`](type/Document) | NOTHING |

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
	id : 61,
	date : 1,
	from_id : $client->peerUser(
		user_id : 2853787003482002228,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : 7793109074544994059,
		),
		from_name : 'rixJhtkAD7LevBlq',
		story_id : 91,
	),
	expire_date : 42,
	caption : 'UuMsj5XOTrWCLfIw',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 7,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 34,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 61,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 5,
			language : 'ySPrFdT89AbRxKc0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 50,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : -2611197359752828238,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 77,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 92,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 32,
			document_id : -2008142684843970860,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 96,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 28,
			date : 54,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 62,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 84,
			old_text : 'aMbl5v2NcdFTtRuL',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 5,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 2012117.6923828125,
				y : -1601268.05859375,
				w : -200048.654296875,
				h : 1038687.3701171875,
				rotation : 495727.0361328125,
				radius : 487462.6787109375,
			),
			geo : $client->geoPointEmpty(),
			title : 'szltAIibDCUOGMkj',
			address : 'GxyFY8dpWJ0B6OEv',
			provider : 'KNrQv3Gy7LVFOAH5',
			venue_id : '0hJkHOrdf9sX5RlE',
			venue_type : 'Dp0bCJIq6kYcj7Zy',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -318836.548828125,
				y : -177522.7451171875,
				w : 481394.876953125,
				h : -941514.6640625,
				rotation : 1637011.4931640625,
				radius : 1656808.37109375,
			),
			query_id : 7123882305217773699,
			result_id : 'hKTVqz7SAr2m85Ut',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1086923.4736328125,
				y : -1127254.0078125,
				w : -1201318.888671875,
				h : -1797711.634765625,
				rotation : -649555.8408203125,
				radius : -1950290.7529296875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'WLZVbY9TlrNcBmHf',
				state : 'jh3JoQn6fPWz0rsT',
				city : 'Xv47ClYNTBMVPI8L',
				street : 'ahlGWH0zIsAn3o7S',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1893696.1953125,
				y : -647156.0810546875,
				w : -1405881.78125,
				h : 1803551.0400390625,
				rotation : 149366.287109375,
				radius : -711240.234375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1011787.70703125,
				y : -822016.6630859375,
				w : -52895.7021484375,
				h : 798211.9833984375,
				rotation : -1146353.4150390625,
				radius : -553386.0107421875,
			),
			channel_id : 4815735689029344336,
			msg_id : 86,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1964986.689453125,
				y : 1850700.5185546875,
				w : 1886270.47265625,
				h : 1358820.501953125,
				rotation : 390540.7568359375,
				radius : -928018.0498046875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 90,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1479025.5556640625,
				y : 724879.912109375,
				w : 380043.6201171875,
				h : -896424.697265625,
				rotation : 119266.3896484375,
				radius : -172661.94140625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1981686.6728515625,
				y : -1252733.7041015625,
				w : 1570859.759765625,
				h : 961656.15234375,
				rotation : 1389992.076171875,
				radius : 814606.1318359375,
			),
			emoji : 'kJmQfiTgbSuOVXPR',
			temperature_c : 76917.6875,
			color : 59,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -834959.419921875,
				y : -1560701.662109375,
				w : 1111304.130859375,
				h : -844060.361328125,
				rotation : -773290.736328125,
				radius : 601434.083984375,
			),
			slug : 'bqCvtgX1uF8rnlVh',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(2061695693511699711),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(8953091582078803347),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(5614899884098871746),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-8761127400218709715),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 15,
		forwards_count : 27,
		reactions : array(
			$client->reactionCount(
				chosen_order : 85,
				reaction : $client->reactionEmpty(),
				count : 0,
			),
		),
		reactions_count : 29,
		recent_viewers : array(-690361115708611827),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(15),
	music : $client->documentEmpty(
		id : -8077569938969097998,
	),
);
```