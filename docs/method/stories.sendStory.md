# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 211

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
| **albums** | [`flags.8?Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_REQUIRED** | `400` | The specified channel must first be boosted by its users in order to perform this action |
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
	peer : $client->inputPeerEmpty(),
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 939715.5908203125,
				y : -1608955.0986328125,
				w : -483502.9150390625,
				h : 1568132.1865234375,
				rotation : -189511.6494140625,
				radius : -1656960.412109375,
			),
			geo : $client->geoPointEmpty(),
			title : 'p05bCG8dHXgRz6Ly',
			address : 'XAlCDPVtaeHoFOIN',
			provider : 'nl2pj8Ac953CYJkq',
			venue_id : 'E8wkjuv0F7GzicSm',
			venue_type : 'Kci78SBh9HztrfkW',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 434687.0810546875,
				y : 92082.9072265625,
				w : 651646.6103515625,
				h : -194824.470703125,
				rotation : -1265588.3076171875,
				radius : 358138.7080078125,
			),
			query_id : -5854347983078530644,
			result_id : 'MgFakl3GUQuHJxzt',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -103424.7294921875,
				y : -1493227.3193359375,
				w : -760784.994140625,
				h : 145840.3623046875,
				rotation : 584679.859375,
				radius : 739794.00390625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'MmOIJ7ULXYF34QZW',
				state : '2vBebgmMOP5CF9HT',
				city : 'k0BliNILw6hM9sCg',
				street : 'fg238epFQXbzKycd',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -24706.2900390625,
				y : 1754218.3515625,
				w : 26606.8271484375,
				h : -685463.064453125,
				rotation : 1828888.9541015625,
				radius : 299220.31640625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1797639.935546875,
				y : -831019.0908203125,
				w : 93086.4052734375,
				h : 291718.4169921875,
				rotation : -2015036.98046875,
				radius : -1260261.3359375,
			),
			channel_id : 1007132794655139154,
			msg_id : 80,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -898421.9033203125,
				y : -228587.2578125,
				w : -418.9921875,
				h : 1662094.6552734375,
				rotation : -365024.419921875,
				radius : 1257868.318359375,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 43,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1261909.2705078125,
				y : -1842538.662109375,
				w : -553876.5869140625,
				h : 720130.8974609375,
				rotation : -989646.7578125,
				radius : -799341.443359375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -55260.4658203125,
				y : 403664.8798828125,
				w : 902478.03125,
				h : 836124.6376953125,
				rotation : -1797920.33203125,
				radius : 1793137.8076171875,
			),
			emoji : 'TkGFCzNcgIKyXhtE',
			temperature_c : -1410215.8076171875,
			color : 78,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -2037615.0244140625,
				y : -1528394.640625,
				w : 1239847.640625,
				h : -42295.9404296875,
				rotation : 1374994.2998046875,
				radius : -157492.7275390625,
			),
			slug : '3rW9Mx4Q2VAR5q7S',
		),
	),
	caption : 'uMkh8d70JloeqYs2',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 40,
		),
		$client->messageEntityMention(
			offset : 68,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 95,
			length : 64,
		),
		$client->messageEntityBotCommand(
			offset : 42,
			length : 66,
		),
		$client->messageEntityUrl(
			offset : 16,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 49,
			length : 92,
		),
		$client->messageEntityBold(
			offset : 42,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 19,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 40,
			length : 93,
		),
		$client->messageEntityPre(
			offset : 4,
			length : 25,
			language : 's9AU5PyEKlo2BgIt',
		),
		$client->messageEntityTextUrl(
			offset : 2,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 64,
			length : 77,
			user_id : 8294055867573536531,
		),
		$client->inputMessageEntityMentionName(
			offset : 43,
			length : 37,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 48,
			length : 87,
		),
		$client->messageEntityCashtag(
			offset : 93,
			length : 92,
		),
		$client->messageEntityUnderline(
			offset : 45,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 73,
			length : 25,
		),
		$client->messageEntityBankCard(
			offset : 21,
			length : 100,
		),
		$client->messageEntitySpoiler(
			offset : 33,
			length : 8,
		),
		$client->messageEntityCustomEmoji(
			offset : 3,
			length : 58,
			document_id : 2946001244808023624,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 90,
			length : 80,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array(
				$client->inputUserEmpty(),
				$client->inputUserSelf(),
				$client->inputUser(
					user_id : 2060245480996447743,
					access_hash : -7262461701638572062,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 91,
					user_id : 8432306119430284911,
				),
			),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array(
				$client->inputUserEmpty(),
				$client->inputUserSelf(),
				$client->inputUser(
					user_id : 6482474678049123845,
					access_hash : -936991962643611876,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 80,
					user_id : 5774421953080467170,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(6576639958834268294),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-4616187492667596398),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -1483400144799513863,
	period : 17,
	fwd_from_id : $client->inputPeerEmpty(),
	fwd_from_story : 56,
	albums : array(73),
);
```