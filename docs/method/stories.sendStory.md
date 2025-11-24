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
				x : 1203590.25390625,
				y : 1926682.4580078125,
				w : -1458838.447265625,
				h : -454903.5078125,
				rotation : 1953108.1552734375,
				radius : -1373451.16015625,
			),
			geo : $client->geoPointEmpty(),
			title : 'NZf8FRwkiD2hrEX5',
			address : 'uerOmXCfYABQ9Tz6',
			provider : '3TMKDtFBQxf9W0py',
			venue_id : 'OxLUcoHJm3ThrGjf',
			venue_type : 'D9ta6H4k0pMmlnbh',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -199096.7783203125,
				y : -1393958.115234375,
				w : -1956612.912109375,
				h : 299831.880859375,
				rotation : -627267.9189453125,
				radius : -1434403.1552734375,
			),
			query_id : 5463522798564317722,
			result_id : 'CbQS0A1WkDJevFIE',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 942789.1162109375,
				y : -218153.654296875,
				w : -2026190.369140625,
				h : 335683.3447265625,
				rotation : -681947.3310546875,
				radius : 1356638.9580078125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'UIn86K5ZEhgwuizt',
				state : 'o31dPUCz8jrENKRB',
				city : '2VFhHX8r6ubpfZdL',
				street : 'L9jchi80MdSWerRN',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 759012.0419921875,
				y : 671414.810546875,
				w : -191511.498046875,
				h : -862519.90234375,
				rotation : -417464.916015625,
				radius : -602567.8017578125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1607181.4208984375,
				y : -1924058.90234375,
				w : 1773164.8291015625,
				h : 1395221.51171875,
				rotation : 1739186.8154296875,
				radius : 2047938.8203125,
			),
			channel_id : -440781687498117809,
			msg_id : 82,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 859270.3115234375,
				y : 1295950.74609375,
				w : 949167.0693359375,
				h : 1631183.19140625,
				rotation : 1468096.8662109375,
				radius : 1605670.1220703125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 48,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 142876.501953125,
				y : 2027526.1123046875,
				w : 236045.9560546875,
				h : -1945460.66796875,
				rotation : 937335.96484375,
				radius : -952140.2509765625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -356077.9609375,
				y : 1770845.1650390625,
				w : -278151.7998046875,
				h : 481662.7099609375,
				rotation : 1759293.0556640625,
				radius : -864981.8271484375,
			),
			emoji : 'X4s0PThRUMuND3Wo',
			temperature_c : 1010313.8125,
			color : 97,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 789552.7451171875,
				y : 71756.4599609375,
				w : -1344931.708984375,
				h : -771814.525390625,
				rotation : 301791.21484375,
				radius : 1293123.3056640625,
			),
			slug : 'ROqbV8dNCiTc2Mfg',
		),
	),
	caption : 'gRfmIWy3z8d6juNU',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 76,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 18,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 35,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : 'FklLJOP3vZG5Bn1q',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 92,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : 1180242246302225692,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 84,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 24,
			document_id : -7640693325235807831,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 39,
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
			chats : array(-2362938875567935407),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-3440388163694824078),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -731615840535435444,
	period : 4,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 23,
	albums : array(41),
);
```