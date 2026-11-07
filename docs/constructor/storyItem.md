# storyItem

**Description** : *Represents a story*

**Layer** : 229

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
	id : 90,
	date : 89,
	from_id : $client->peerUser(
		user_id : -3531149934210409338,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -869814109139422594,
		),
		from_name : 'FItzRH2pl8foXr0d',
		story_id : 72,
	),
	expire_date : 100,
	caption : 'Pbx1tiaVvMmXRunE',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 66,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 76,
			language : 'h8kzIEUfVpBdGoAj',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 82,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : -3315930472644094070,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 88,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 92,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 75,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 12,
			document_id : -2048909066830822454,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 76,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 25,
			date : 54,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 13,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 42,
			old_text : 't7ySK9aJQzqwbcWP',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 82,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 703211.689453125,
				y : 1247854.4541015625,
				w : -1328113.912109375,
				h : -2026302.5517578125,
				rotation : 535700.0048828125,
				radius : 1437034.33203125,
			),
			geo : $client->geoPointEmpty(),
			title : 'KzRMOfq4Gb3cV8ZF',
			address : 'Sq2o3xD95atKwbOU',
			provider : 'lqufnPapys6cTmJL',
			venue_id : 'yvgSe2xhIdFHr1f9',
			venue_type : 'WeFU9nN6HGkl1ZbX',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1899318.2060546875,
				y : 554624.345703125,
				w : 1487874.228515625,
				h : 1537820.2841796875,
				rotation : 555165.2275390625,
				radius : -1426353.560546875,
			),
			query_id : 806611387582797666,
			result_id : 'n1hP5gvNC7jroBzu',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1722786.4765625,
				y : -105202.125,
				w : -1053661.2802734375,
				h : -619758.19140625,
				rotation : 623664.4990234375,
				radius : -1188995.26171875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'yv4il2KbGZr9A15z',
				state : '9FmuXetwEBo6nWlG',
				city : 'YyZQGgxniMoFT0q2',
				street : 'w9g5kcmbZTAfnYXo',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 412599.83984375,
				y : -1883193.76171875,
				w : -731382.048828125,
				h : -696587.3056640625,
				rotation : -437690.40625,
				radius : -1033404.8857421875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1130459.3876953125,
				y : 113180.037109375,
				w : -1945928.259765625,
				h : -647950.71875,
				rotation : 871550.5908203125,
				radius : 2092540.302734375,
			),
			channel_id : 8257576799665624618,
			msg_id : 0,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -609820.4814453125,
				y : 197098.4755859375,
				w : 372458.96484375,
				h : 889773.123046875,
				rotation : -886687.36328125,
				radius : -1762947.19921875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 72,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1463241.44921875,
				y : -1086898.20703125,
				w : -254901.37109375,
				h : -793721.380859375,
				rotation : -1333940.7353515625,
				radius : 1506514.2783203125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 888075.7724609375,
				y : -1230110.06640625,
				w : 1053109.0400390625,
				h : 1052006.2353515625,
				rotation : -729080.22265625,
				radius : 919383.4384765625,
			),
			emoji : 'lp1ZGDy8k3VweBFE',
			temperature_c : 1643335.681640625,
			color : 11,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -2029846.11328125,
				y : -29944.9462890625,
				w : 1660934.1484375,
				h : -1760814.953125,
				rotation : -1424442.9375,
				radius : 1373369.9189453125,
			),
			slug : 'mpcewRz2B1trdWq6',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-7950552883182704971),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(312909184806673516),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-1285708922551251311),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-9048428854157991746),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 77,
		forwards_count : 62,
		reactions : array(
			$client->reactionCount(
				chosen_order : 92,
				reaction : $client->reactionEmpty(),
				count : 97,
			),
		),
		reactions_count : 100,
		recent_viewers : array(-106119585715188110),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(40),
	music : $client->documentEmpty(
		id : -1918040261768726324,
	),
);
```