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
				x : 15899.0546875,
				y : 605984.556640625,
				w : -792793.3203125,
				h : -1572287.8310546875,
				rotation : -2082249.2548828125,
				radius : 831127.3623046875,
			),
			geo : $client->geoPointEmpty(),
			title : 'wpI7KCmjy2FUQHdV',
			address : 'I7BG0ZgHiRdpLo2s',
			provider : 'KnP0mVCs2Da53LMX',
			venue_id : 'cBWXi3yoJwjsI1Yg',
			venue_type : '2nPRjy6bJdk4gWBz',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1769669.5634765625,
				y : 1548776.6220703125,
				w : -1213757.193359375,
				h : 1852466.25390625,
				rotation : -898863.095703125,
				radius : 471166.3046875,
			),
			query_id : 5652970008478666065,
			result_id : '1MEmSuezcDKpPVGw',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1311721.5712890625,
				y : 53727.150390625,
				w : -622724.51953125,
				h : 626045.7978515625,
				rotation : -365226.71875,
				radius : 1344797.18359375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'bFBtKvdWlGMoXn4a',
				state : 'WnuZaD0OfGdvx1sw',
				city : 'SOIAio4teZzVj9h8',
				street : 'F7WEVPsmNvjXAe2a',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -787949.1181640625,
				y : 1870586.2734375,
				w : 1316889.3896484375,
				h : -626058.521484375,
				rotation : -273701.3603515625,
				radius : 24648.080078125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -2058839.3369140625,
				y : 1443008.3310546875,
				w : -1476198.5537109375,
				h : 1017710.6875,
				rotation : -871552.7802734375,
				radius : 1203740.60546875,
			),
			channel_id : -2422467430357680282,
			msg_id : 8,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1527197.458984375,
				y : -1194643.04296875,
				w : -1799509.4521484375,
				h : 2053657.3017578125,
				rotation : -1348574.4384765625,
				radius : 1466323.4443359375,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 52,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1765742.2607421875,
				y : -976802.837890625,
				w : -1914746.5537109375,
				h : 402939.16015625,
				rotation : -530832.16796875,
				radius : -655851.353515625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1992184.31640625,
				y : -1414563.8466796875,
				w : 29693.2158203125,
				h : -254394.1025390625,
				rotation : -697052.078125,
				radius : -1905811.4873046875,
			),
			emoji : '7gCIZ9DKo3hBzR0Q',
			temperature_c : 1167548.7841796875,
			color : 12,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1959307.6318359375,
				y : 23857.20703125,
				w : -56789.33984375,
				h : 2015879.779296875,
				rotation : -560162.4033203125,
				radius : -328102.59375,
			),
			slug : 'posaezX0KPOudy5Q',
		),
	),
	caption : 'XL697E8C2w0Pu1ix',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 75,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 19,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 51,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 79,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 69,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 15,
			language : 'xEg78k1WGX9ReSYC',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 73,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 52,
			user_id : -210208165329514750,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 11,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 26,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 92,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : -1067015921618605463,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 51,
			date : 98,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 58,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 8,
			old_text : 'srjq7Kx9WUiVdvoS',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 22,
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
			chats : array(-7922166552324032825),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(1767872824613268813),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -2770613966730150025,
	period : 9,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 12,
	albums : array(24),
	music : $client->inputDocumentEmpty(),
);
```