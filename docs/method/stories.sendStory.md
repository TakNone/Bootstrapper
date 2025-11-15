# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 218

```tl
stories.sendStory#737fc2ec flags:# pinned:flags.2?true noforwards:flags.4?true fwd_modified:flags.7?true peer:InputPeer media:InputMedia media_areas:flags.5?Vector<MediaArea> caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long period:flags.3?int fwd_from_id:flags.6?InputPeer fwd_from_story:flags.6?int albums:flags.8?Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Whether to add the story to the profile automatically upon expiration. If not set, the story will only be added to the archive, see here » for more info |
| **noforwards** | [`flags.4?true`](type/true) | If set, disables forwards, screenshots, and downloads |
| **fwd_modified** | [`flags.7?true`](type/true) | Set this flag when reposting stories with fwd_from_id+fwd_from_id, if the media was modified before reposting |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to send the story as |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The story media |
| **media_areas** | [`flags.5?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.0?string`](type/string) | Story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text, if allowed by the stories_entities client configuration parameter » |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | Privacy rules for the story, indicating who can or can't view the story |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending |
| **period** | [`flags.3?int`](type/int) | Period after which the story is moved to archive (and to the profile if pinned is set), in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise |
| **fwd_from_id** | [`flags.6?InputPeer`](type/InputPeer) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **fwd_from_story** | [`flags.6?int`](type/int) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **albums** | [`flags.8?Vector<int>`](type/int) | If set, adds the story to the specified albums |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_REQUIRED** | `400` | The specified channel must first be boosted by its users in order to perform this action |
| **BOT_ACCESS_FORBIDDEN** | `403` | The specified method can be used over a business connection for some operations, but the specified query attempted an operation that is not allowed over a business connection |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_FILE_INVALID** | `400` | The specified media file is invalid |
| **MEDIA_TYPE_INVALID** | `400` | The specified media type cannot be used in stories |
| **MEDIA_VIDEO_STORY_MISSING** | `400` | A non-story video cannot be repubblished as a story (emitted when trying to resend a non-story video as a story using inputDocument) |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `400` | A premium account is required to execute this action |
| **STORIES_TOO_MUCH** | `400` | You have hit the maximum active stories limit as specified by the story_expiring_limit_* client configuration parameters: you should buy a Premium subscription, delete an active story, or wait for the oldest story to expire |
| **STORY_PERIOD_INVALID** | `400` | The specified story period is invalid for this account |
| **VENUE_ID_INVALID** | `400` | The specified venue ID is invalid |

---

## Example

```php
$updates = $client->stories->sendStory(
	pinned : true,
	noforwards : true,
	fwd_modified : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1734769.1689453125,
				y : 1620928.966796875,
				w : -301214.93359375,
				h : 1897114.208984375,
				rotation : 1852825.396484375,
				radius : -596849.8466796875,
			),
			geo : $client->geoPointEmpty(),
			title : 'uFfj1svgUnaXPS3R',
			address : 'kOBeMqj9Ir2xgvVm',
			provider : 'NSKCmco6bl032VIu',
			venue_id : 'h8kGvQF4PI7Y5a0L',
			venue_type : 'jNpqdUAW16gEr2QC',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -349309.6044921875,
				y : -1524441.53125,
				w : 1405966.830078125,
				h : -1035538.7255859375,
				rotation : -36676.4443359375,
				radius : -753063.83203125,
			),
			query_id : 3283699848730472587,
			result_id : 'HAYwOTmXNguCdVhn',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1338075.888671875,
				y : 811366.58203125,
				w : 339452.08984375,
				h : -1591478.1259765625,
				rotation : 1662960.6240234375,
				radius : 1802488.7783203125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'zeCjcYQRLftw2kTB',
				state : 'bHOhsE1VnCF3GwpU',
				city : 'Gbhg8UoyvFs9H7NM',
				street : 'dB5TD8uZX9by0Pni',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 327280.6328125,
				y : 570321.7607421875,
				w : -1606386.0146484375,
				h : 1152023.263671875,
				rotation : -973999.078125,
				radius : 1200708.3427734375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1489919.5263671875,
				y : -1632055.58203125,
				w : -2007621.291015625,
				h : -1367186.3896484375,
				rotation : -1084051.150390625,
				radius : 232696.62109375,
			),
			channel_id : 462291215685441165,
			msg_id : 99,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 425986.5927734375,
				y : -1516531.70703125,
				w : 1732422.5458984375,
				h : 1067766.1630859375,
				rotation : -1940355.1591796875,
				radius : 1684245.1923828125,
			),
			channel : $client->get_input_channel(peer : '@LiveProto'),
			msg_id : 53,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1958919.1787109375,
				y : -427949.330078125,
				w : 357853.6767578125,
				h : 1681477.7802734375,
				rotation : -1381101.4296875,
				radius : -2016760.271484375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1048852.08203125,
				y : -2066390.00390625,
				w : -1248138.5634765625,
				h : 1281823.662109375,
				rotation : -242756.509765625,
				radius : -260179.1728515625,
			),
			emoji : 'onz3T1Et5MIHOevl',
			temperature_c : 1119625.568359375,
			color : 67,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1863432.48828125,
				y : -534668.5849609375,
				w : -300165.072265625,
				h : -1453799.48828125,
				rotation : 122445.83984375,
				radius : -2065398.8349609375,
			),
			slug : '5hRV3UrL6j0ZTcmn',
		),
	),
	caption : 'ZwXvVSjN9IE18eKt',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 52,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 13,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 73,
			language : 'ZatmLwRKb6vJs8XO',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 69,
			user_id : 7045487889659823559,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 93,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 0,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 76,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : -4438845999906663360,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 33,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(peer : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(peer : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(2735638770359777675),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-1601505307197892272),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 4705277492936631723,
	period : 51,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 33,
	albums : array(85),
);
```