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
	id : 5,
	date : 64,
	from_id : $client->peerUser(
		user_id : 2880160357053768906,
	),
	fwd_from : $client->storyFwdHeader(
		modified : true,
		from : $client->peerUser(
			user_id : -1137853293778845821,
		),
		from_name : 'O2VEFhUYMiNSyZd9',
		story_id : 57,
	),
	expire_date : 25,
	caption : 'j7sK4CYLbBQMI9cO',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 64,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 15,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 17,
			language : 'aGBToAXun9VRS1Cl',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 18,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : 7381660646751641754,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 92,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 92,
			document_id : -3893298845134136036,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 78,
		),
	),
	media : $client->messageMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -492897.056640625,
				y : -1866811.34375,
				w : 1602924.22265625,
				h : -948774.7802734375,
				rotation : 1499128.462890625,
				radius : 1638437.8134765625,
			),
			geo : $client->geoPointEmpty(),
			title : 'HNmuRtChSKFkEvU0',
			address : 'rUEbsP0F3AKeB4GN',
			provider : 'FWweIihcz1gMNlvD',
			venue_id : 'PbHDm0RgavMI6oZG',
			venue_type : 'McdRUQnrZP75Fh69',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -333454.78125,
				y : -814649.294921875,
				w : 1552966.51953125,
				h : -1536798.123046875,
				rotation : -81037.234375,
				radius : 1463336.2568359375,
			),
			query_id : -233219086536870028,
			result_id : 'iSLHG8uh4gnq721k',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1888424.8916015625,
				y : -978899.4375,
				w : -463569.072265625,
				h : 1649971.662109375,
				rotation : -1736003.0703125,
				radius : -743281.232421875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'qHEyAtmsR47bFk01',
				state : '1oYN9dkXArICT7yV',
				city : 'RpOIVgDc4mqYfNsA',
				street : 'D1y8bhvQpAfc7S9k',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -878533.3564453125,
				y : -1150819.0283203125,
				w : -372190.91015625,
				h : 209137.4287109375,
				rotation : -1666476.33984375,
				radius : 1387218.849609375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1879372.1611328125,
				y : -952382.9931640625,
				w : 1494739.38671875,
				h : 326503.16796875,
				rotation : -1544196.0625,
				radius : -603087.5234375,
			),
			channel_id : -5613039729634133504,
			msg_id : 53,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1151473.3876953125,
				y : 1174605.4814453125,
				w : 184782.9970703125,
				h : -792177.322265625,
				rotation : -1858432.9599609375,
				radius : -632407.93359375,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 46,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1886006.3251953125,
				y : -598954.939453125,
				w : 1238068.5869140625,
				h : -2050986.6455078125,
				rotation : 1449837.314453125,
				radius : 1821543.1044921875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 739797.3662109375,
				y : -1342921.0419921875,
				w : -894955.03515625,
				h : 2003895.88671875,
				rotation : 26084.2734375,
				radius : 1961711.703125,
			),
			emoji : 'yFPwHc6Asdh95k3p',
			temperature_c : -1936509.1484375,
			color : 84,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 61242.9921875,
				y : 270251.8388671875,
				w : 1314644.1953125,
				h : 230110.0166015625,
				rotation : -1032176.7822265625,
				radius : -581328.125,
			),
			slug : 'Y02VqQzSTPiNlWdv',
		),
	),
	privacy : array(
		$client->privacyValueAllowContacts(),
		$client->privacyValueAllowAll(),
		$client->privacyValueAllowUsers(
			users : array(8251686674228850894),
		),
		$client->privacyValueDisallowContacts(),
		$client->privacyValueDisallowAll(),
		$client->privacyValueDisallowUsers(
			users : array(-4564629873419437857),
		),
		$client->privacyValueAllowChatParticipants(
			chats : array(-8253004595208679135),
		),
		$client->privacyValueDisallowChatParticipants(
			chats : array(-580812286395251078),
		),
		$client->privacyValueAllowCloseFriends(),
		$client->privacyValueAllowPremium(),
		$client->privacyValueAllowBots(),
		$client->privacyValueDisallowBots(),
	),
	views : $client->storyViews(
		has_viewers : true,
		views_count : 40,
		forwards_count : 83,
		reactions : array(
			$client->reactionCount(
				chosen_order : 0,
				reaction : $client->reactionEmpty(...),
				count : 87,
			),
		),
		reactions_count : 15,
		recent_viewers : array(-9138550545717365424),
	),
	sent_reaction : $client->reactionEmpty(),
	albums : array(28),
);
```