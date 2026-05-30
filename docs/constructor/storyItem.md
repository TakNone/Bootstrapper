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
	id : 37,
	date : 9,
	from_id : $client->peerUser(
		user_id : 3434028111160490999,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : 2402605293626366395,
		),
		from_name : 'TnChBj9v3UyLlNsi',
		story_id : 62,
	),
	expire_date : 50,
	caption : 'SVam3HwNfb17FUs0',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 7,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 22,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 11,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 13,
			language : 'i1jFBK8WfSOTXq6Q',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 66,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : 6494535059790909811,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 21,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 77,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 53,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : -2050420614521170760,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 55,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1152883.4462890625,
				y : -1141859.3681640625,
				w : 2012151.3876953125,
				h : -521398.4404296875,
				rotation : 826351.0400390625,
				radius : 204579.22265625,
			),
			geo : $client->geoPointEmpty(),
			title : '8UJP1ImTjFHiCE7A',
			address : 'zBoMsb0uZfEtq2DP',
			provider : 'XYJ4LvUGsZ6bcanH',
			venue_id : '41ez8pqy5UWSaBE6',
			venue_type : 'Wp14SQxRo0rwhvu7',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1711483.2001953125,
				y : 790302.2900390625,
				w : 237745.572265625,
				h : -594886.6640625,
				rotation : 915790.83984375,
				radius : 252495.2998046875,
			),
			query_id : 4784391311467622021,
			result_id : 'c5DPoUfzTYCIW7JG',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 185083.1513671875,
				y : 433758.611328125,
				w : -706253.146484375,
				h : 1817557.0771484375,
				rotation : -17396.3203125,
				radius : 1946524.6689453125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : '9YCVPoE0atxsMcl4',
				state : 'UmrRLTWw9ian41yt',
				city : '5zekxApNW087KoyR',
				street : 'MLkrqKxPBbCcAIYm',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -512689.4619140625,
				y : -566268.287109375,
				w : -274203.9384765625,
				h : 327710.4013671875,
				rotation : -1316426.5,
				radius : 753692.1796875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 719446.2880859375,
				y : -1375848.982421875,
				w : -431157.1181640625,
				h : 269289.27734375,
				rotation : -1847992.849609375,
				radius : -2004012.8232421875,
			),
			channel_id : 1073903709442154036,
			msg_id : 74,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 2066841.7392578125,
				y : -1734097.8095703125,
				w : -2074712.5205078125,
				h : -2002049.3984375,
				rotation : -1510975.2392578125,
				radius : 2776.2734375,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 12,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1948382.7119140625,
				y : -1498414.61328125,
				w : -1457374.1806640625,
				h : 299808.255859375,
				rotation : -832184.8330078125,
				radius : -364227.4990234375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1288315.3447265625,
				y : -2022051.93359375,
				w : -654054.3017578125,
				h : 905540.1796875,
				rotation : -1336587.6875,
				radius : 304169.2138671875,
			),
			emoji : 'rTumioKJVgIyZaRQ',
			temperature_c : 1492015.0205078125,
			color : 8,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 2039412.068359375,
				y : -741180.1220703125,
				w : -931477.6318359375,
				h : -1800684.5283203125,
				rotation : -1347386.4404296875,
				radius : -1516355.7451171875,
			),
			slug : 'SIXjNf8z5K7MZP3g',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(4068593519804348699),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-8631779893381390115),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(2778547199693589371),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-6068325478557983130),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 33,
		forwards_count : 57,
		reactions : array(
			$client->reactionCount(
				chosen_order : 79,
				reaction : $client->reactionEmpty(),
				count : 66,
			),
		),
		reactions_count : 43,
		recent_viewers : array(-3555816544496420236),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(68),
);
```