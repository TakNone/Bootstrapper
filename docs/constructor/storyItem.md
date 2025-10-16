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
	id : 55,
	date : 71,
	from_id : $client->peerUser(
		user_id : -6101485502150277038,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : 1999817204311678154,
		),
		from_name : 'vm3k1z6hyPcOluit',
		story_id : 40,
	),
	expire_date : 51,
	caption : 'VyWHmKJOnIzcBiqg',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 51,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 22,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 79,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 15,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 50,
			language : 'G9tM8NfHcwxylaP5',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 33,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : 7115380981224651189,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 65,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 81,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : 4521213083199947925,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 13,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1590196.8701171875,
				y : -247211.8310546875,
				w : 626376.50390625,
				h : -1403182.095703125,
				rotation : -1347192.3486328125,
				radius : -706146.953125,
			),
			geo : $client->geoPointEmpty(),
			title : 'Xud7lbFnyDcPp8RK',
			address : '01OnPJx8TjXYuV3a',
			provider : 'k4TQ5hCjxby1IlKo',
			venue_id : 'U8ToFka9rwWvsqY3',
			venue_type : 'KoraUXdTPtGzDxCO',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1413733.38671875,
				y : -1264809.6591796875,
				w : -2092217.8583984375,
				h : -1998902.509765625,
				rotation : -1603476.525390625,
				radius : -945954.4462890625,
			),
			query_id : -6044495240797970772,
			result_id : 'NawOGSPytFmQ1lDB',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -522718.26171875,
				y : -444576.4560546875,
				w : 732180.8818359375,
				h : -204023.8623046875,
				rotation : 2004901.779296875,
				radius : 264200.240234375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'yrg8a45nIqu0wFVd',
				state : 'xfMmIiRq0dGLZvcF',
				city : 'NTGc8ZkurChBEfJF',
				street : 'ba1erPv4wFS8Qxhi',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1157525.5830078125,
				y : 1194694.779296875,
				w : -1738018.87890625,
				h : 1995286.76171875,
				rotation : 1963538.509765625,
				radius : -943978.28125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1801609.962890625,
				y : -1915368.701171875,
				w : 1521911.3291015625,
				h : 547702.1083984375,
				rotation : -1258222.365234375,
				radius : -410292.2607421875,
			),
			channel_id : 832116677349864474,
			msg_id : 83,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -485949.716796875,
				y : -93596.193359375,
				w : 673090.64453125,
				h : 960045.53515625,
				rotation : -848145.841796875,
				radius : 1304463.76171875,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 43,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 379612.4638671875,
				y : -1226705.388671875,
				w : 213292.060546875,
				h : 221321.931640625,
				rotation : -2066532.9345703125,
				radius : -764701.2294921875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1440107.0439453125,
				y : -203511.8369140625,
				w : -301140.0537109375,
				h : -680245.6572265625,
				rotation : 1860529.4716796875,
				radius : 1400897.09765625,
			),
			emoji : '9SlYixzDpdKohPFf',
			temperature_c : 1707835.2666015625,
			color : 69,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1612930.8037109375,
				y : 800710.4091796875,
				w : -795097.0029296875,
				h : 46307.98828125,
				rotation : -907333.47265625,
				radius : 2080471.701171875,
			),
			slug : 'Bi63PSuaEmKCGs7R',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(1061449182103469879),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-9096276393243179442),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(8249562011581966133),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(2328370360564141004),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 84,
		forwards_count : 97,
		reactions : array(
			$client->reactionCount(
				chosen_order : 60,
				reaction : $client->reactionEmpty(...),
				count : 5,
			),
		),
		reactions_count : 40,
		recent_viewers : array(3284253404755619558),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(94),
);
```