# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 233

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
| **fwd_modified** | [`flags.7?true`](type/true) | Set this flag when reposting stories with fwd_from_id+fwd_from_story, if the media was modified before reposting |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to send the story as |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The story media |
| **media_areas** | [`flags.5?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.0?string`](type/string) | Story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text, if allowed by the stories_entities client configuration parameter » |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | Privacy rules for the story, indicating who can or can't view the story |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending. See here » for more info on random ID deduplication and updateMessageID mapping |
| **period** | [`flags.3?int`](type/int) | Period after which the story is moved to archive (and to the profile if pinned is set), in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise |
| **fwd_from_id** | [`flags.6?InputPeer`](type/InputPeer) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **fwd_from_story** | [`flags.6?int`](type/int) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **albums** | [`flags.8?Vector<int>`](type/int) | If set, adds the story to the specified albums |
| **music** | [`flags.9?InputDocument`](type/InputDocument) | If set, the audio track to play as background music for the story |

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
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_FILE_INVALID** | `400` | The specified media file is invalid |
| **MEDIA_TYPE_INVALID** | `400` | The specified media type cannot be used in stories |
| **MEDIA_VIDEO_STORY_MISSING** | `400` | A non-story video cannot be repubblished as a story (emitted when trying to resend a non-story video as a story using inputDocument) |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PHOTO_INVALID_DIMENSIONS** | `400` | The photo dimensions are invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `400` | A premium account is required to execute this action |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |
| **STORIES_TOO_MUCH** | `400` | You have hit the maximum active stories limit as specified by the story_expiring_limit_* client configuration parameters: you should buy a Premium subscription, delete an active story, or wait for the oldest story to expire |
| **STORY_PERIOD_INVALID** | `400` | The specified story period is invalid for this account |
| **VENUE_ID_INVALID** | `400` | The specified venue ID is invalid |
| **VIDEO_DURATION_INVALID** | `400` | The duration of the specified video is invalid |

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
				x : 851633.943359375,
				y : 598327.984375,
				w : -535751,
				h : -65858.9091796875,
				rotation : 2052093.630859375,
				radius : 716391.697265625,
			),
			geo : $client->geoPointEmpty(),
			title : 'HJQc8YRibeFZfxAD',
			address : 'DjlkSTnzXNVcP4Wb',
			provider : 'tvwkKLuX7Yapzgm8',
			venue_id : 'EJjmIbWKxqVXdh2f',
			venue_type : '8ASbxMKyVjish3Lt',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1558163.15234375,
				y : -1569887.5390625,
				w : -468712.234375,
				h : 1798411.109375,
				rotation : -134699.9287109375,
				radius : 1285990.5380859375,
			),
			query_id : 2320194465474318944,
			result_id : 'XKjEvwcqFpZis8Ro',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 660540.353515625,
				y : -901605.7578125,
				w : 604848.15625,
				h : 1683672.1279296875,
				rotation : -42176.75,
				radius : 1326057.0126953125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'h54ZUB9LeGu2gX6v',
				state : 'VAlvQhbUpNn9SwWq',
				city : 'bm5GjoVK3MzkCF4x',
				street : 'PuLvFjIlyZ215Td3',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1314728.1357421875,
				y : 1450865.1533203125,
				w : -2001933.7822265625,
				h : -1569948.564453125,
				rotation : -1847982.5234375,
				radius : -328554.9384765625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1722101.41015625,
				y : -1275737.0712890625,
				w : -630777.1845703125,
				h : 1624619.89453125,
				rotation : -587444.59375,
				radius : 499146.3095703125,
			),
			channel_id : -8373824256734833041,
			msg_id : 18,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 2014276.2490234375,
				y : -1738245.2587890625,
				w : -485294.60546875,
				h : 512339.3818359375,
				rotation : -1141704.58984375,
				radius : 1940220.2861328125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 60,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -818636.064453125,
				y : -1421411.2666015625,
				w : 19434.8203125,
				h : -275435.5224609375,
				rotation : 994039.1796875,
				radius : 777651.5859375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1568221.185546875,
				y : -762789.9619140625,
				w : -1069149.64453125,
				h : 368093.482421875,
				rotation : 1408395.9140625,
				radius : -2002234.607421875,
			),
			emoji : 'r2wEDufc58RTagxM',
			temperature_c : -346552.70703125,
			color : 87,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -2054576.3232421875,
				y : -1620592.337890625,
				w : 742057.6630859375,
				h : 1816523.154296875,
				rotation : 465784.9541015625,
				radius : 1366476.138671875,
			),
			slug : 'pmdELQXKYJvlA4PT',
		),
	),
	caption : 'P4ABtibfFYsHwp3n',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 21,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 10,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 2,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 76,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 82,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 71,
			language : 'zS3yQTp14KZCgqb2',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 24,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : -2814272607045044660,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 35,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 14,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 41,
			document_id : 2739000917761118246,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 64,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 0,
			date : 94,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 50,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 58,
			old_text : 'XiyUlhjJ3C769rAw',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 75,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 46,
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
			chats : array(6438869345224756872),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-3946152517246121476),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 484618868599708273,
	period : 52,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 89,
	albums : array(47),
	music : $client->inputDocumentEmpty(),
);
```