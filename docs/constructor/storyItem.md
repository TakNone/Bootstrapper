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
	id : 89,
	date : 53,
	from_id : $client->peerUser(
		user_id : 132813145187130213,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -6904299659102569559,
		),
		from_name : 'M8R1ZJdKAfitC64G',
		story_id : 28,
	),
	expire_date : 8,
	caption : 'LwWRxUplq7AVHoEe',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 33,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 80,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 34,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 100,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 96,
			language : 'gQl6vi1uJesrdOwF',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 55,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : 494843574106036339,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 75,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 28,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 64,
			document_id : 1042953807397317960,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 7,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 83,
			date : 94,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 99,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 88,
			old_text : '7ELmDeJM0ZvRhqTA',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 76,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1509127.5869140625,
				y : -560551.4365234375,
				w : 256998.8125,
				h : -462964.2529296875,
				rotation : -684342.896484375,
				radius : -1123251.572265625,
			),
			geo : $client->geoPointEmpty(),
			title : 'xc46WMOwsn0fRiug',
			address : '6GtP94ViChQ8upeo',
			provider : 'Qg07f2qeLTBRNaXA',
			venue_id : '2l1BzhAY4DVHUMZa',
			venue_type : 'z0yxbSQ14muBRtLV',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1343788.9375,
				y : -670213.01171875,
				w : -1226087.1494140625,
				h : 515960.6884765625,
				rotation : 118415.7724609375,
				radius : -1607568.8447265625,
			),
			query_id : -6787242470707771712,
			result_id : 'F3HmvsRpdrSNwkiu',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1936717.255859375,
				y : 1275632.0615234375,
				w : -1302036.49609375,
				h : 1432523.080078125,
				rotation : 38716.6416015625,
				radius : 1630246.5107421875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'MgIKNmpZjYF2r9c8',
				state : 'oW5jHwR34u17qnmG',
				city : 'lL2zbTij6Bf9vXxE',
				street : 'wPSd0qbBjEDXgACF',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1359037.3369140625,
				y : -1931508.07421875,
				w : -1140548.564453125,
				h : 1232895.2431640625,
				rotation : 1884867.3046875,
				radius : 855771.15234375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1857887.92578125,
				y : 697403.490234375,
				w : -1085820.7734375,
				h : -1802374.013671875,
				rotation : 325925.7685546875,
				radius : 637829.70703125,
			),
			channel_id : -111603357992532599,
			msg_id : 59,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 452081.10546875,
				y : -634723.47265625,
				w : -1855086.265625,
				h : -659064.2412109375,
				rotation : 1148307.5078125,
				radius : -1452877.900390625,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 69,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1214078.068359375,
				y : 324073.06640625,
				w : -1425140.1435546875,
				h : 1891221.3935546875,
				rotation : 343478.98046875,
				radius : 818934.1279296875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 740437.6357421875,
				y : -134268.3583984375,
				w : -464815.9443359375,
				h : 1482352.841796875,
				rotation : 810525.455078125,
				radius : -1341161.775390625,
			),
			emoji : 'YXLpuyGTDvnWmh5a',
			temperature_c : 1723803.1669921875,
			color : 43,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1280037.9072265625,
				y : 994702.541015625,
				w : 460566.6591796875,
				h : -1575778.54296875,
				rotation : -1062659.3193359375,
				radius : -1297.0537109375,
			),
			slug : 'UAVScTRjzH8YXnie',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(5452891289789316561),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(7620777962579372875),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(8911831137412695305),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(1445813830717413564),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 12,
		forwards_count : 31,
		reactions : array(
			$client->reactionCount(
				chosen_order : 3,
				reaction : $client->reactionEmpty(),
				count : 85,
			),
		),
		reactions_count : 4,
		recent_viewers : array(-7896915048891996827),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(93),
	music : $client->documentEmpty(
		id : 914070776876902464,
	),
);
```