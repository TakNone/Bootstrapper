# storyItem

**Description** : *Represents a story*

**Layer** : 214

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
	id : 50,
	date : 16,
	from_id : $client->peerUser(
		user_id : 8576892965704318160,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -2892209193569928992,
		),
		from_name : 'rLoYzM5psWRIhGDe',
		story_id : 31,
	),
	expire_date : 90,
	caption : 'Nto8Fv4qgLuXM9dz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 25,
			length : 26,
		),
		$client->messageEntityMention(
			offset : 98,
			length : 66,
		),
		$client->messageEntityHashtag(
			offset : 85,
			length : 2,
		),
		$client->messageEntityBotCommand(
			offset : 72,
			length : 33,
		),
		$client->messageEntityUrl(
			offset : 50,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 93,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 41,
			length : 64,
		),
		$client->messageEntityItalic(
			offset : 91,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 46,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 34,
			length : 50,
			language : 'wh7otin0fCGbOgcV',
		),
		$client->messageEntityTextUrl(
			offset : 13,
			length : 38,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 83,
			length : 59,
			user_id : -4719747275787712214,
		),
		$client->inputMessageEntityMentionName(
			offset : 82,
			length : 6,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 54,
			length : 68,
		),
		$client->messageEntityCashtag(
			offset : 7,
			length : 29,
		),
		$client->messageEntityUnderline(
			offset : 64,
			length : 61,
		),
		$client->messageEntityStrike(
			offset : 67,
			length : 96,
		),
		$client->messageEntityBankCard(
			offset : 14,
			length : 30,
		),
		$client->messageEntitySpoiler(
			offset : 62,
			length : 78,
		),
		$client->messageEntityCustomEmoji(
			offset : 46,
			length : 6,
			document_id : 4159229217400465209,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 64,
			length : 32,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1558462.146484375,
				y : 943936.814453125,
				w : 531324.767578125,
				h : 555693.955078125,
				rotation : 1386418.9091796875,
				radius : -1915177.0224609375,
			),
			geo : $client->geoPointEmpty(),
			title : '0p8slUNSDh1z79T4',
			address : 'UQVKM1pNjO3sk5l7',
			provider : 'jYAQ6DXdZPHbuVzO',
			venue_id : 'JmtC7Ij6KigDapZb',
			venue_type : '0RHK8qlefVoC362b',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -578824.8583984375,
				y : 1339282.705078125,
				w : -1383617.953125,
				h : -828828.25,
				rotation : -13863.828125,
				radius : 774701.7705078125,
			),
			query_id : -5376406940144036279,
			result_id : 'iMSEn4wPZxzUXBu8',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1414194.15625,
				y : -1877006.189453125,
				w : -1190627.0830078125,
				h : 1285535.275390625,
				rotation : -1345017.6533203125,
				radius : 1692306.2841796875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'rADdN0m9pwsUPv56',
				state : '7oEVvuOdGAYpC9mh',
				city : 'qt1Tvjr4JBN0b9G6',
				street : 'p9PkCMtAhQfuoLmy',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1804016.5966796875,
				y : 1426573.837890625,
				w : -1035186.97265625,
				h : -125094.087890625,
				rotation : -541609.9560546875,
				radius : 487806.6318359375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 590249.05859375,
				y : 1111308.1318359375,
				w : -1583448.1435546875,
				h : 1466119.7822265625,
				rotation : -2009601.7119140625,
				radius : -597073.0009765625,
			),
			channel_id : 81050094110526589,
			msg_id : 27,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 250886.3603515625,
				y : 1106901.19140625,
				w : 1341241.9609375,
				h : -2091561.9765625,
				rotation : 26695.892578125,
				radius : 1692108.2626953125,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 38,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 861699.6162109375,
				y : -1149534.2080078125,
				w : -629443.8818359375,
				h : -410622.6474609375,
				rotation : 1031114.55859375,
				radius : -846565.7265625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1643125.2880859375,
				y : 184103.7998046875,
				w : 2082874.98828125,
				h : 248234.5283203125,
				rotation : 390919.0185546875,
				radius : 850785.3681640625,
			),
			emoji : 'ziHLABQs1WXKUV8I',
			temperature_c : 1661907.7275390625,
			color : 39,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1851237.8759765625,
				y : -1272226.1240234375,
				w : -400523.865234375,
				h : 141796.6240234375,
				rotation : -112917.599609375,
				radius : -687736.0087890625,
			),
			slug : 'KqgpSyYlo89Zd1Dh',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-6859423511896832203),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-597897978010163182),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(429139658377778249),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(2953273847775735542),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 15,
		forwards_count : 22,
		reactions : array(
			$client->reactionCount(
				chosen_order : 9,
				reaction : $client->reactionEmpty(...),
				count : 86,
			),
		),
		reactions_count : 8,
		recent_viewers : array(7941814555864918738),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(55),
);
```