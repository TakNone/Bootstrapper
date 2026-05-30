# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 222

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
				x : 370420.515625,
				y : 96544.791015625,
				w : 28549.826171875,
				h : 1621110.19921875,
				rotation : 1513220.1201171875,
				radius : -1594629.1943359375,
			),
			geo : $client->geoPointEmpty(),
			title : 'POuyU6WiHwIA8EBf',
			address : 'PSzGAujdt3NQoOna',
			provider : 'Dx3C4sUH6iEOeJrZ',
			venue_id : 'ethuKUqimTwXxlZr',
			venue_type : 'Jq2h6AdmRIa7Grye',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1667042.287109375,
				y : 923125.083984375,
				w : -535883.1767578125,
				h : 1121923.404296875,
				rotation : -301278.068359375,
				radius : -1091678.4384765625,
			),
			query_id : -6613849978909800532,
			result_id : 'hrus7ekXOL2QicRl',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1187141.6630859375,
				y : -1433248.6650390625,
				w : 710010.15625,
				h : -313623.79296875,
				rotation : -560263.7490234375,
				radius : -348008.94921875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'sHJoqU8eEihCAQG6',
				state : 'b04tUEkDjOplr9Rh',
				city : '1xJ6IkSLPZWQeBbn',
				street : 'J8EqUHOvbd0gA3Ti',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1624662.732421875,
				y : -1242173.11328125,
				w : 1429913.0146484375,
				h : -868976.791015625,
				rotation : -567957.1083984375,
				radius : -775349.7724609375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 329642.0908203125,
				y : -986935.5888671875,
				w : -140592.408203125,
				h : 191202.357421875,
				rotation : -1402386.162109375,
				radius : 2005176.83203125,
			),
			channel_id : 5476016773990065909,
			msg_id : 88,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1135770.3330078125,
				y : 248004.3115234375,
				w : -951541.2412109375,
				h : 1869781.400390625,
				rotation : 1511621.0400390625,
				radius : -616273.166015625,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 30,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -772301.67578125,
				y : 1365417.3935546875,
				w : 1589395.03125,
				h : -1476915.080078125,
				rotation : -1069727.85546875,
				radius : 243090.6640625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1267248.2939453125,
				y : 857825.2587890625,
				w : -1353618.6435546875,
				h : -496658.1611328125,
				rotation : -623206.189453125,
				radius : -1701585.1982421875,
			),
			emoji : 'SpJEb3nVMjfA5qhs',
			temperature_c : 201135.6474609375,
			color : 52,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -876672.220703125,
				y : 566941.2822265625,
				w : 902687.728515625,
				h : -807802.7041015625,
				rotation : 275454.65625,
				radius : -89865.0361328125,
			),
			slug : 'lZ7I3Siq8BPbJu5N',
		),
	),
	caption : 'dwXqLmjU8yKxoe2M',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 77,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 41,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 58,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 86,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 42,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 10,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 35,
			language : 'V1HfXdjok8FG53OZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 0,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : -3259869943589641715,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 53,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 48,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 97,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : 9206439906066393996,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 62,
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
			chats : array(3392590113165849240),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(913326818900105355),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 8955971232981556488,
	period : 30,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 58,
	albums : array(12),
);
```