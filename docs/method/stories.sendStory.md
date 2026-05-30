# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 225

```tl
stories.sendStory#8f9e6898 flags:# pinned:flags.2?true noforwards:flags.4?true fwd_modified:flags.7?true peer:InputPeer media:InputMedia media_areas:flags.5?Vector<MediaArea> caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long period:flags.3?int fwd_from_id:flags.6?InputPeer fwd_from_story:flags.6?int albums:flags.8?Vector<int> music:flags.9?InputDocument = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **music** | [`flags.9?InputDocument`](type/InputDocument) | NOTHING |

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
				x : -1691221.0615234375,
				y : -1769363.2041015625,
				w : -294553.2900390625,
				h : -890106.2822265625,
				rotation : -300887.7060546875,
				radius : 759845.578125,
			),
			geo : $client->geoPointEmpty(),
			title : '1rTqSoxKZ0UOHQyG',
			address : 'bd9KEH3apzBgGSR0',
			provider : 'uW5gx2sacwYrQvIl',
			venue_id : 'VyL6xJrebsG2hgI7',
			venue_type : '5rmOuZPCBU0A6e1H',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -563762.3681640625,
				y : -1457916.470703125,
				w : 838482.10546875,
				h : 1055508.65234375,
				rotation : 1681109.568359375,
				radius : -438127.0576171875,
			),
			query_id : -3834772952597009335,
			result_id : 'ixCf8HmgTF7KIV9X',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -441352.7080078125,
				y : 1264115.4111328125,
				w : -1954978.955078125,
				h : -829797.5078125,
				rotation : 463225.4208984375,
				radius : 1366657.7451171875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'G8NOcUEyMbC6waJ2',
				state : 'g3BaPE0YKLRNIpnT',
				city : 'kM0h5t6NKZaFwp87',
				street : 'NSbeTJ4Hl2CwiBoX',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -2010959.5244140625,
				y : 749431.20703125,
				w : -1924840.9931640625,
				h : 1099589.748046875,
				rotation : 635899.294921875,
				radius : -1989697.2236328125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -386984.5673828125,
				y : -1573676.46875,
				w : 421219.6806640625,
				h : 1558466.34765625,
				rotation : 483717.4169921875,
				radius : 1883679.279296875,
			),
			channel_id : -7928575484932394045,
			msg_id : 57,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -2086442.765625,
				y : 1101611.091796875,
				w : 1446265.5185546875,
				h : 1791094.6201171875,
				rotation : -1427155.7998046875,
				radius : 204634.5341796875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 70,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1637714.5546875,
				y : -2081441.8310546875,
				w : 738810.314453125,
				h : -668329.4248046875,
				rotation : -1029445.9638671875,
				radius : 1867308.404296875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 526305.6875,
				y : -268280.861328125,
				w : -1585856.0810546875,
				h : 2090226.7412109375,
				rotation : -725193.2861328125,
				radius : 359157.3857421875,
			),
			emoji : 'uTyq1kRobfFH9VW0',
			temperature_c : 479612.7314453125,
			color : 10,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1772405.5595703125,
				y : -46878.7373046875,
				w : -820416.189453125,
				h : -1262745.927734375,
				rotation : -1730337.0869140625,
				radius : -1175455.986328125,
			),
			slug : 'v7QNTJlYp3MreR2t',
		),
	),
	caption : '05nMlzASWjeKwNPa',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 66,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 100,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 48,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 63,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 4,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 54,
			language : 'MmvNJ5YKiPz9XjHQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 79,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : 8542346105992116508,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 39,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : -3015771044139202371,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 45,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 15,
			date : 92,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 9,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 41,
			old_text : 'A9Oq1gu7yrxTh3Sw',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 76,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-6307517663310671351),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(720289628074808833),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 6849244469431707868,
	period : 84,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 95,
	albums : array(53),
	music : $client->inputDocumentEmpty(),
);
```