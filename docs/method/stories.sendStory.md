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
				x : -457031.689453125,
				y : -1831653.50390625,
				w : 1372977.4931640625,
				h : 2086860.197265625,
				rotation : -161256.986328125,
				radius : 1952162.2744140625,
			),
			geo : $client->geoPointEmpty(),
			title : 'hFgSJPQq2cxa8rN9',
			address : 'Nacq9kCHPgKzSGJi',
			provider : '9RvZV3LEgeIsDM7c',
			venue_id : 'krw48WRUuQyX1pYt',
			venue_type : 'N8blI6BdD9E53yHh',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1432289.638671875,
				y : 1370262.9931640625,
				w : 794407.05078125,
				h : 1350561.7939453125,
				rotation : 1956775.294921875,
				radius : -244370.1484375,
			),
			query_id : 1243285511021593416,
			result_id : 'R7DZ4dOjWUf9Itm0',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1803961.3310546875,
				y : -561361.7958984375,
				w : 868474.025390625,
				h : -1352281.962890625,
				rotation : -56792.0166015625,
				radius : 1618222.3310546875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'H0wSDP6I4rTL7Mku',
				state : 'njk3KPWsVUrN0fv1',
				city : 'zdh2g47Zv1P5MbNB',
				street : 'R2fV6YSym7OGsnjE',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1141448.9580078125,
				y : 213094.4521484375,
				w : -539489.8642578125,
				h : 1754370.525390625,
				rotation : -1830719.41015625,
				radius : 433388.8115234375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 199835.177734375,
				y : -1923877.7060546875,
				w : 1953755.8935546875,
				h : -148227.20703125,
				rotation : 760702.5576171875,
				radius : -2006980.724609375,
			),
			channel_id : -7000356669798044752,
			msg_id : 81,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -881067.8193359375,
				y : -502810.1962890625,
				w : -947427.7666015625,
				h : 1860756.4482421875,
				rotation : 68064.4306640625,
				radius : 2093291.734375,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 61,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -375005.458984375,
				y : -145754.626953125,
				w : -1727925.5078125,
				h : 1260739.4853515625,
				rotation : -1219256.7578125,
				radius : -1342542.2861328125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -2090111.3564453125,
				y : 1722813.9580078125,
				w : -1212963.8583984375,
				h : -897994.3017578125,
				rotation : -1563236.6845703125,
				radius : -583595.115234375,
			),
			emoji : '0JykXYc4ex2KA8uG',
			temperature_c : 1846178.5068359375,
			color : 96,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -854216.95703125,
				y : -1075578.912109375,
				w : 587746.8076171875,
				h : 1839815.99609375,
				rotation : -1676673.50390625,
				radius : 882938.0859375,
			),
			slug : 'WZEHuY4h7clRt0kG',
		),
	),
	caption : 'GyN7vp9e3tkQJf1c',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 41,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 14,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 43,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 30,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 53,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 70,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 80,
			language : 'DKk4gcMEBUuzOidh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 36,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : -6690589182113008948,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 48,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 87,
			document_id : 6760995341309598737,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 37,
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
			chats : array(7177441511536943988),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-4327250956314955271),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -6081487670568273001,
	period : 61,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 23,
	albums : array(68),
);
```