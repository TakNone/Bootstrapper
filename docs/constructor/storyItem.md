# storyItem

**Description** : *Represents a story*

**Layer** : 225

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
	id : 77,
	date : 90,
	from_id : $client->peerUser(
		user_id : 6920782997671457059,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -4098383643545887822,
		),
		from_name : 'iXG7Zo1khCcx2MNy',
		story_id : 89,
	),
	expire_date : 68,
	caption : '56v0gGQoyJ7mKkSl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 20,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 8,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 75,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 64,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 31,
			language : 'Zj8Pqtp2WVSOh3rs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 53,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 100,
			user_id : 214050678117800326,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 89,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 27,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 75,
			document_id : 7922823798887544125,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 19,
			date : 61,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 40,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 29,
			old_text : 'O43SCWFnt0fPL5GJ',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 15,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1271704.5029296875,
				y : 210728.5986328125,
				w : 1311364.283203125,
				h : -1972731.3759765625,
				rotation : -1239675.984375,
				radius : -2049151.5390625,
			),
			geo : $client->geoPointEmpty(),
			title : 'V5goeJYCIEclNDGR',
			address : 'JmNgqUvuitSZGjyQ',
			provider : 'oWu36VCNMXjhJgGP',
			venue_id : 'PZ7rBsHSmkylc0dG',
			venue_type : 'Eyg3pjXCrzGe2sVK',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1909989.9736328125,
				y : -779236.9990234375,
				w : 1738647.1064453125,
				h : -1749116.650390625,
				rotation : -1986110.7705078125,
				radius : 15619.984375,
			),
			query_id : -6837289968627636688,
			result_id : 'oYCTHUS6kLDPJ5Ox',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 526045.51171875,
				y : -1439190.6943359375,
				w : -770533.3623046875,
				h : 179004.2236328125,
				rotation : 595717.8017578125,
				radius : -1402935.2919921875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'IDokUwA47SF2EKmZ',
				state : 'qlymYj4Rfov8gZOp',
				city : 'oiuqhQLjgX6FUace',
				street : '96Qrig8b3zlROpZ7',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -639081.521484375,
				y : 92695.8212890625,
				w : -1936098.7529296875,
				h : 1138432.0546875,
				rotation : -313269.03515625,
				radius : 232249.919921875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1133131.244140625,
				y : -649423.4443359375,
				w : 213829.966796875,
				h : -1937762.978515625,
				rotation : 1783471.1484375,
				radius : 520937.5234375,
			),
			channel_id : 4870799260463930610,
			msg_id : 85,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1510491.9267578125,
				y : -34465.5380859375,
				w : 490766.654296875,
				h : 1521686.2509765625,
				rotation : 90261.42578125,
				radius : -1294598.517578125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 24,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1186487.322265625,
				y : -1101638.62109375,
				w : -868096.3017578125,
				h : -1428355.7744140625,
				rotation : -1361321.4931640625,
				radius : -2032272.87890625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 2014573.935546875,
				y : 167948.7216796875,
				w : -816925.787109375,
				h : -1019773.8291015625,
				rotation : 140140.611328125,
				radius : 689224.6748046875,
			),
			emoji : 'LOJBlvzuoxaPy79p',
			temperature_c : -1943248.505859375,
			color : 27,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -394452.876953125,
				y : -359326.9609375,
				w : 1215327.2216796875,
				h : 712951.671875,
				rotation : 1736504.765625,
				radius : 1340489.419921875,
			),
			slug : '9ofALpmuQ7ixzOcs',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(-7699440441015336753),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-1922908402583097828),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-6632615565947436032),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(3916793255282528887),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 7,
		forwards_count : 0,
		reactions : array(
			$client->reactionCount(
				chosen_order : 95,
				reaction : $client->reactionEmpty(),
				count : 96,
			),
		),
		reactions_count : 31,
		recent_viewers : array(6718780735917358196),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(36),
	music : $client->documentEmpty(
		id : -7556988476741764450,
	),
);
```