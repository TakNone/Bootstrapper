# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 214

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
				x : 638636.89453125,
				y : 117257.81640625,
				w : -1428270.1982421875,
				h : -795701.4033203125,
				rotation : 1236017.3056640625,
				radius : 867771.9765625,
			),
			geo : $client->geoPointEmpty(),
			title : 'DLuEdHr67TlawbAC',
			address : 'E40DUY5ts9xLHbuS',
			provider : 'ApX2wBgOmJfLVyQC',
			venue_id : 'dmcyGFSEP4Yx1qRp',
			venue_type : 'fhHzMnIWpqSGD60l',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 541448.037109375,
				y : 2075554.3310546875,
				w : 1019459.515625,
				h : 1830120.0078125,
				rotation : -1259477.333984375,
				radius : -116044.140625,
			),
			query_id : 8430996471505963758,
			result_id : 'ocZv9SyjdYEHGeDW',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -760106.75,
				y : 652777.13671875,
				w : -614304.724609375,
				h : -1861679.4462890625,
				rotation : 1932058.9423828125,
				radius : 1494121.423828125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'gfx50q8Kko2tmyzU',
				state : 'Xc7JkrowdTI9eKiR',
				city : 'AGjXi6q2wLvSpb31',
				street : 'GHVtI24ExX8FD9Bi',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -706254.9248046875,
				y : 2071315.40625,
				w : 1017703.07421875,
				h : 666149.46484375,
				rotation : -1917329.23046875,
				radius : 195789.48046875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -815393.7734375,
				y : 1329115.998046875,
				w : 177286.30078125,
				h : -61621.23046875,
				rotation : 1857151.1533203125,
				radius : 275551.7275390625,
			),
			channel_id : 251963230536958586,
			msg_id : 41,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 484623.572265625,
				y : 655789.4306640625,
				w : -1700023.693359375,
				h : -1235814.396484375,
				rotation : 1022797.8115234375,
				radius : 1759770.58984375,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 38,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 275427.9501953125,
				y : 390927.6748046875,
				w : 83701.7119140625,
				h : -503207.8583984375,
				rotation : 800726.9130859375,
				radius : 1627404.935546875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 980923.87109375,
				y : 972724.7275390625,
				w : 714892.6630859375,
				h : 1715585.455078125,
				rotation : 1674673.5498046875,
				radius : -1373524.1142578125,
			),
			emoji : 'HN4fESevhamI6nBb',
			temperature_c : 999682.9130859375,
			color : 70,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -276374.169921875,
				y : 1011541.0849609375,
				w : 1340.6796875,
				h : 2041834.162109375,
				rotation : 297145.935546875,
				radius : 1139059.775390625,
			),
			slug : 'Y9NLexgVZj7Sh6Cu',
		),
	),
	caption : 'Fcf71iaubjhdS6yK',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 16,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 30,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 51,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 82,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 13,
			language : 'HozefLNsX5qVcIC7',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 68,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 31,
			user_id : 3401107606188891898,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 67,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 78,
			document_id : -4479287221245527261,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 28,
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
					user_id : -4533027580613231711,
					access_hash : -8080828848788762738,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 78,
					user_id : -1573250713657082481,
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
					user_id : 380505374010412857,
					access_hash : 2307069388209377584,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 60,
					user_id : -6011908685233402939,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-6032472898474753305),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(203534754400731462),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 7543615681463032129,
	period : 32,
	fwd_from_id : $client->inputPeerEmpty(),
	fwd_from_story : 55,
	albums : array(23),
);
```