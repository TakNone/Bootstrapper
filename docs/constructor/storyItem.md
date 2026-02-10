# storyItem

**Description** : *Represents a story*

**Layer** : 222

```tl
storyItem#edf164f1 flags:# pinned:flags.5?true public:flags.7?true close_friends:flags.8?true min:flags.9?true noforwards:flags.10?true edited:flags.11?true contacts:flags.12?true selected_contacts:flags.13?true out:flags.16?true id:int date:int from_id:flags.18?Peer fwd_from:flags.17?StoryFwdHeader expire_date:int caption:flags.0?string entities:flags.1?Vector<MessageEntity> media:MessageMedia media_areas:flags.14?Vector<MediaArea> privacy:flags.2?Vector<PrivacyRule> views:flags.3?StoryViews sent_reaction:flags.15?Reaction albums:flags.19?Vector<int> = StoryItem;
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
	id : 65,
	date : 57,
	from_id : $client->peerUser(
		user_id : -6983148929850925539,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -7500546285670981026,
		),
		from_name : 'FluETawk2XcePCtz',
		story_id : 83,
	),
	expire_date : 6,
	caption : 'qDFcfIwJTW85UCOe',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 8,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 55,
			language : 'i5P0u69NUIHfosyZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 75,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : -8585002152544906083,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 19,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 99,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 18,
			document_id : -1197999420476215793,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 72,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 717111.7666015625,
				y : -652301.037109375,
				w : 762482.41015625,
				h : 1743997.509765625,
				rotation : 40034.3583984375,
				radius : -458578.310546875,
			),
			geo : $client->geoPointEmpty(),
			title : 'YRaQiJwDZrdfGkeN',
			address : 'DQjG1C082IzVNbLS',
			provider : 'wyZ9gskd7MRN0TOv',
			venue_id : 'Zy6LwPI9Dk8FVi2e',
			venue_type : 'D5OwH2nv90xtecN8',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -733992.2080078125,
				y : -1088636.076171875,
				w : -740481.8857421875,
				h : -1368732.06640625,
				rotation : 545378.3642578125,
				radius : -617476.716796875,
			),
			query_id : 4259954117513869903,
			result_id : 'DHXnbGQpuAqY5Ie4',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 669661.1572265625,
				y : 1775373.1923828125,
				w : -1624610.6181640625,
				h : -755199.79296875,
				rotation : -1689630.0908203125,
				radius : 553161.0869140625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'qtH5OLTeYnRvMmS0',
				state : 'fKiAv7La6dEQyxrV',
				city : 'yD9jAsSOM8boKf6H',
				street : '2kj0AbIh84CSplE1',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 175554.75,
				y : -1602861.3232421875,
				w : 740738.888671875,
				h : -237527.2890625,
				rotation : 443908.7998046875,
				radius : -1766182.046875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1545336.44140625,
				y : -1035289.6767578125,
				w : 355491.2724609375,
				h : -1780194.1669921875,
				rotation : -2019788.3076171875,
				radius : -1011091.6142578125,
			),
			channel_id : -4587945547114628771,
			msg_id : 79,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 776255.3857421875,
				y : 746972.5400390625,
				w : 772089.22265625,
				h : 1712906.828125,
				rotation : 873896.896484375,
				radius : 1759482.294921875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 78,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -813809.009765625,
				y : 889930.3359375,
				w : 492631.2138671875,
				h : 1470986.1787109375,
				rotation : 432837.2548828125,
				radius : -1391142.208984375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1666515.759765625,
				y : 1590088.986328125,
				w : -12097.775390625,
				h : -1531828.677734375,
				rotation : 1593671.0068359375,
				radius : 1489478.0419921875,
			),
			emoji : 'BCguWSTnZ4vbzDe3',
			temperature_c : -1316561.8525390625,
			color : 55,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1216751.4345703125,
				y : -779618.671875,
				w : 1605054.4794921875,
				h : 1040214.3544921875,
				rotation : 1569509.767578125,
				radius : -712010.74609375,
			),
			slug : 'RTz95mkwbJQqX7ix',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(2506917985832435936),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-4241217126596658862),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(5192765582913110110),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-3466441851442828586),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 35,
		forwards_count : 49,
		reactions : array(
			$client->reactionCount(
				chosen_order : 93,
				reaction : $client->reactionEmpty(),
				count : 33,
			),
		),
		reactions_count : 2,
		recent_viewers : array(-1773415509246660273),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(70),
);
```