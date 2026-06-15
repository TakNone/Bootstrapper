# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 227

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
				x : 1776343.5107421875,
				y : -1748702.2626953125,
				w : -251443.013671875,
				h : -692146.228515625,
				rotation : -1752236.78125,
				radius : 656938.064453125,
			),
			geo : $client->geoPointEmpty(),
			title : 'RlQvcEJfN3tY9idT',
			address : 's9nTP5XEMtivNZIK',
			provider : 'rMviXbREs5wNS3Fu',
			venue_id : 'VNsn1Xk0a7BEZLoU',
			venue_type : 'iD6Tar5jXSepbHw2',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1437092.435546875,
				y : 1203154.3408203125,
				w : 728471.9599609375,
				h : -1596063.1240234375,
				rotation : 845408.298828125,
				radius : 516241.2880859375,
			),
			query_id : -5324674800258973108,
			result_id : 'lTNJvBdz7haHtGLD',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1730670.7548828125,
				y : -2044824.2578125,
				w : -882389.412109375,
				h : 1668993.06640625,
				rotation : 768203.2919921875,
				radius : 917383.9033203125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'm4cwDA1ResWLE0P2',
				state : 'nWIh0NPGVp6qkoxs',
				city : '0gp2RL9b8q4W1aNA',
				street : '24PfqaeR01OYugvT',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 74927.5859375,
				y : -1742791.9365234375,
				w : -927399.8173828125,
				h : 538040.4501953125,
				rotation : 1446107.4560546875,
				radius : -1643762.189453125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1150062.283203125,
				y : -2088929.3544921875,
				w : 1274139.8701171875,
				h : -498360.81640625,
				rotation : 697060.4052734375,
				radius : 838187.1328125,
			),
			channel_id : 1185980214521174313,
			msg_id : 100,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1915747.451171875,
				y : -356195.3427734375,
				w : -1987396.9501953125,
				h : -1729693.953125,
				rotation : 100256.083984375,
				radius : 115305.1484375,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 76,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -414823.587890625,
				y : -270326.4736328125,
				w : 398626.78125,
				h : -312204.8125,
				rotation : 996405.5224609375,
				radius : 902858.8984375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1528070.5322265625,
				y : 547343.7451171875,
				w : -371056.267578125,
				h : -111491.392578125,
				rotation : -365334.51953125,
				radius : -736576.912109375,
			),
			emoji : 'VE9fjGndY7DF4vpP',
			temperature_c : -663025.4189453125,
			color : 80,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -707754.5615234375,
				y : -1233384.81640625,
				w : 258720.5068359375,
				h : 1202922.0146484375,
				rotation : 1451997.1220703125,
				radius : -702015.22265625,
			),
			slug : 'WO8xBAQ4c7CTnM0w',
		),
	),
	caption : 'f8nEmybta7Bz6MJ0',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 36,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 45,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 93,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 76,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 78,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : 'X4IfUzQRM1buHFW7',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 46,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : 2755764021496116859,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 88,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 39,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 74,
			document_id : -5010955361578173320,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 18,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 83,
			date : 89,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 14,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 98,
			old_text : '60mtHQ8yYnFhiR42',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 69,
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
			chats : array(8994627811356931135),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-5406397021891765124),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 3340499394997655606,
	period : 44,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 89,
	albums : array(85),
	music : $client->inputDocumentEmpty(),
);
```