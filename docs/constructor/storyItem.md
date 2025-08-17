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
	id : 75,
	date : 37,
	from_id : $client->peerUser(
		user_id : -4387411310837527329,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -2607630293951951048,
		),
		from_name : 'HRSbaDJWcx1EpGTf',
		story_id : 44,
	),
	expire_date : 81,
	caption : 'ifzOnTrwM9ot2FGx',
	entities : array(
		$client->messageEntityUnknown(
			offset : 66,
			length : 58,
		),
		$client->messageEntityMention(
			offset : 64,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 9,
			length : 23,
		),
		$client->messageEntityBotCommand(
			offset : 43,
			length : 58,
		),
		$client->messageEntityUrl(
			offset : 32,
			length : 47,
		),
		$client->messageEntityEmail(
			offset : 8,
			length : 18,
		),
		$client->messageEntityBold(
			offset : 67,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 92,
			length : 77,
		),
		$client->messageEntityCode(
			offset : 91,
			length : 43,
		),
		$client->messageEntityPre(
			offset : 25,
			length : 26,
			language : 'YsUDA4iF5oQLbKME',
		),
		$client->messageEntityTextUrl(
			offset : 7,
			length : 78,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 2,
			length : 13,
			user_id : 659293514669449774,
		),
		$client->inputMessageEntityMentionName(
			offset : 74,
			length : 66,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 14,
			length : 53,
		),
		$client->messageEntityCashtag(
			offset : 9,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 48,
			length : 48,
		),
		$client->messageEntityStrike(
			offset : 26,
			length : 5,
		),
		$client->messageEntityBankCard(
			offset : 21,
			length : 18,
		),
		$client->messageEntitySpoiler(
			offset : 30,
			length : 40,
		),
		$client->messageEntityCustomEmoji(
			offset : 86,
			length : 92,
			document_id : -1763860077942010082,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 86,
			length : 64,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1552375.193359375,
				y : -431882.123046875,
				w : 449665.052734375,
				h : -1450206.2744140625,
				rotation : 61135.8583984375,
				radius : 1357825.4248046875,
			),
			geo : $client->geoPointEmpty(),
			title : 'NBare6ZhjscixkLp',
			address : 'LXguOWRmK3ybd5p8',
			provider : 'IyAxs79ztmj2fEKO',
			venue_id : 'MXypw5eODdVz6nq3',
			venue_type : 'yMiQKjL5fAXlPzqE',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1753487.62109375,
				y : 1131520.599609375,
				w : -211251.9296875,
				h : -2042568.76171875,
				rotation : -1041712.021484375,
				radius : -1118335.3427734375,
			),
			query_id : 7196413571705873967,
			result_id : 'Gna8ys69EXzmMkRA',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1591277.310546875,
				y : -1691822.86328125,
				w : 1511166.009765625,
				h : 850913.8857421875,
				rotation : 916776.8818359375,
				radius : 2003581.8125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'Zhx2jHkmt9zAp7r3',
				state : 'xN5W63S1U9RDZhLJ',
				city : 'ZwYos54E6c2eDqLi',
				street : 'bhK5Ci1DJYE3l8xU',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1209188.6162109375,
				y : -1312687.7958984375,
				w : -1180210.087890625,
				h : 1126276.1865234375,
				rotation : 1872793.119140625,
				radius : 217872.5390625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1631011.4306640625,
				y : -575345.1552734375,
				w : -730346.017578125,
				h : 925232.7060546875,
				rotation : 1549680.0068359375,
				radius : -1646799.291015625,
			),
			channel_id : 6172449164733042085,
			msg_id : 72,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 866756.4150390625,
				y : 172555.5458984375,
				w : 1631418.625,
				h : -1211757.626953125,
				rotation : -899036.5009765625,
				radius : 325470.4033203125,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 32,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1500461.8798828125,
				y : -944017.7548828125,
				w : 2016150.126953125,
				h : 260640.84375,
				rotation : 998556.4765625,
				radius : -1045128.3515625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 805005.865234375,
				y : -210288.5341796875,
				w : -899578.12890625,
				h : 301372.8193359375,
				rotation : 953896.865234375,
				radius : 226747.5947265625,
			),
			emoji : 'bcY3Mhi2HOQDBen6',
			temperature_c : -1714301.7587890625,
			color : 80,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -682154.603515625,
				y : -1792110.3447265625,
				w : -445480.25,
				h : 568805.130859375,
				rotation : -1937409.75,
				radius : 1392970.646484375,
			),
			slug : 'K68YwEWPmxqprI9F',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(2455681552581533105),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(317954418873773794),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(7797200373865574916),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(2278542849001649818),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 93,
		forwards_count : 50,
		reactions : array(
			$client->reactionCount(
				chosen_order : 31,
				reaction : $client->reactionEmpty(...),
				count : 37,
			),
		),
		reactions_count : 58,
		recent_viewers : array(9160386749631830978),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(90),
);
```