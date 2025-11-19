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
	id : 4,
	date : 50,
	from_id : $client->peerUser(
		user_id : -1987483844531481014,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : 3512796879694292877,
		),
		from_name : '7OhUz3TCEI9mVLBp',
		story_id : 83,
	),
	expire_date : 100,
	caption : 'IklCU6DVtR3vn5HQ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 73,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 61,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 22,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 17,
			language : 'uL3vgqatD7yQBSxM',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 43,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : -271707118043500937,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 22,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 45,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 94,
			document_id : -2181586942318959354,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 6,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1305652.48046875,
				y : -1521653.4521484375,
				w : 956708.5078125,
				h : -246463.8037109375,
				rotation : -1425511.2275390625,
				radius : 1198355.5634765625,
			),
			geo : $client->geoPointEmpty(),
			title : 'TJFV7QRrX2yPc8Mh',
			address : 'X80GoLUQak9T7KnE',
			provider : 'pxIWt0v6lwS2a7TE',
			venue_id : 'lrDp0HtINX4AcKoS',
			venue_type : 'k1tVxs3yUWP8nKcY',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1496941.8359375,
				y : -1185724.1201171875,
				w : -404772.6875,
				h : -403830.5869140625,
				rotation : -1544459.3642578125,
				radius : -1556445.0205078125,
			),
			query_id : -1023973120197848063,
			result_id : 'C6bvpf9tEycO8DTh',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 481178.3466796875,
				y : 671349.0224609375,
				w : -1353673.466796875,
				h : -225652.708984375,
				rotation : 1790761.2451171875,
				radius : -450189.7001953125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'natf14vFYm5WOgZ9',
				state : 'PrGl6XYdx72hU3Kw',
				city : 'm0cTiInyqC9XarQ8',
				street : 'u7Yfls21aeRWJ9Lx',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 940347.892578125,
				y : 497231.7490234375,
				w : -459558.5498046875,
				h : -461334.2451171875,
				rotation : -1131344.2578125,
				radius : 792181.4072265625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 476995.962890625,
				y : -961249.970703125,
				w : -1203353.529296875,
				h : -1764454.3583984375,
				rotation : 1120976.2734375,
				radius : -1450943.1279296875,
			),
			channel_id : -3537230383057448133,
			msg_id : 73,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1026931.546875,
				y : -728015.8125,
				w : -1633233.87890625,
				h : 1991135.626953125,
				rotation : 1047695.89453125,
				radius : -267134.0986328125,
			),
			channel : $client->get_input_channel(peer : '@LiveProto'),
			msg_id : 100,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1295304.203125,
				y : 702657.55859375,
				w : 1622057.166015625,
				h : -2005068.2490234375,
				rotation : -723360.083984375,
				radius : 1483934.6923828125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -898976.8876953125,
				y : 1228759.2421875,
				w : -671927.1318359375,
				h : -1004506.4384765625,
				rotation : -1929878.603515625,
				radius : -2055672.8076171875,
			),
			emoji : 'Z65kCFhqifmRJ8sr',
			temperature_c : 122522.4169921875,
			color : 73,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1420219.525390625,
				y : -1620071.140625,
				w : 998345.1904296875,
				h : -1445159.005859375,
				rotation : -1164142.3583984375,
				radius : -800085.005859375,
			),
			slug : 'GhHFQMlcAviV7Ije',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-8205872860667361312),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-8898768335982147402),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-752724380566993676),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-1271283008012359786),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 2,
		forwards_count : 23,
		reactions : array(
			$client->reactionCount(
				chosen_order : 38,
				reaction : $client->reactionEmpty(),
				count : 75,
			),
		),
		reactions_count : 25,
		recent_viewers : array(8606738341211688923),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(63),
);
```