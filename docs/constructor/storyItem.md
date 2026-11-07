# storyItem

**Description** : *Represents a story*

**Layer** : 233

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
| **music** | [`flags.20?Document`](type/Document) | If set, the audio track played as background music for the story |

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
	id : 42,
	date : 78,
	from_id : $client->peerUser(
		user_id : 6806955895444425697,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -5848433943414236220,
		),
		from_name : 'uSi2n3rFRlcZQzs4',
		story_id : 92,
	),
	expire_date : 60,
	caption : '5RIONeBDMjTE6VAt',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 5,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 12,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 21,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 68,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 34,
			language : 'UVzvRAmZJWQlXF4B',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : -8137811514616420453,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 47,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 13,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : -5802574350416896487,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 40,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 69,
			date : 58,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 82,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 7,
			old_text : 'T2lbFZc1uQLtyCXj',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 58,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 68,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 697941.9638671875,
				y : -1125959.5146484375,
				w : -1930652.5576171875,
				h : 1241473.56640625,
				rotation : -752346.873046875,
				radius : -1279661.88671875,
			),
			geo : $client->geoPointEmpty(),
			title : 'AatkfhQKsYLzbS8Z',
			address : 'nDshPzqlxdA97rGe',
			provider : 'w85yHcGK9ChFWgQa',
			venue_id : 'm8wEsv6jrxICXPDH',
			venue_type : 'k3Mx9LfVBHOGruwq',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 89799.6083984375,
				y : 1609210.9951171875,
				w : -407677.8046875,
				h : 911323.9375,
				rotation : 1557371.6474609375,
				radius : 3371.609375,
			),
			query_id : -5959688642915108404,
			result_id : 'yQVZp4BTUY5uxCLH',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -841181.6767578125,
				y : -420033.31640625,
				w : 1520909.8212890625,
				h : 1836303.6064453125,
				rotation : -1955750.6318359375,
				radius : -1884871.0478515625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'oJHxn1QeEjawhmfL',
				state : 'bLxgzRSaIlf2vmo0',
				city : 'LJEeS3tP0VahRm96',
				street : 'rETacD3F7Gm8l5Ks',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -937678.6884765625,
				y : -1857263.5078125,
				w : -1950503.3271484375,
				h : 309182.4560546875,
				rotation : -543729.8310546875,
				radius : -1435556.7548828125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1397173.736328125,
				y : -963917.734375,
				w : -548341.4892578125,
				h : -98036.3720703125,
				rotation : 1370494.9921875,
				radius : -2063596.3935546875,
			),
			channel_id : -8905848835451935290,
			msg_id : 36,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1324485.322265625,
				y : -1769280.345703125,
				w : 1449255.4013671875,
				h : -1366583.021484375,
				rotation : -1846968.83984375,
				radius : 663857.16796875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 79,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1552391.24609375,
				y : 1677182.2587890625,
				w : 1186699.0810546875,
				h : 977133.6044921875,
				rotation : -281212.53515625,
				radius : -458188.4013671875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1867092.962890625,
				y : -2000058.63671875,
				w : 253471.6484375,
				h : 728596.4208984375,
				rotation : 266836.5185546875,
				radius : -1507309.2373046875,
			),
			emoji : 'gqpTkthxPacDdJlW',
			temperature_c : -520994.1357421875,
			color : 20,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1637166.99609375,
				y : 2505.5419921875,
				w : -1449302.6435546875,
				h : 1885389.0966796875,
				rotation : 1267782.6982421875,
				radius : 579594.1484375,
			),
			slug : 'P3EBROmvkz9pH41G',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-5898664319131113898),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-6337732214632205484),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-5534823817122387660),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-6937830301294732264),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 92,
		forwards_count : 46,
		reactions : array(
			$client->reactionCount(
				chosen_order : 17,
				reaction : $client->reactionEmpty(),
				count : 36,
			),
		),
		reactions_count : 46,
		recent_viewers : array(720246988843731649),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(99),
	music : $client->documentEmpty(
		id : -7488632973950655606,
	),
);
```