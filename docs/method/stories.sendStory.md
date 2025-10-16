# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 216

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
				x : -435048.900390625,
				y : -1133079.673828125,
				w : 1869833.330078125,
				h : 491889.7109375,
				rotation : 205241.748046875,
				radius : 202207.142578125,
			),
			geo : $client->geoPointEmpty(),
			title : '91oncJBjdEUzvKZw',
			address : 'LZBg6dlOsoc05thu',
			provider : 'JqCKn2h0Wf8aQLXS',
			venue_id : 'KCrHiEPR2tFDVLmd',
			venue_type : 'NQbFCBxDuksdS6H3',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -2057786.3857421875,
				y : -1919635.2548828125,
				w : -1678747.08984375,
				h : -249582.3486328125,
				rotation : -85626.873046875,
				radius : -1865712.919921875,
			),
			query_id : -4222243716201223437,
			result_id : 'JRQjC6DEYutK5nm4',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -265857.2158203125,
				y : -1479227.7216796875,
				w : 733461.2783203125,
				h : 956900.724609375,
				rotation : -930775.7001953125,
				radius : -1239327.537109375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'txdbEfFI4GaOs6U8',
				state : 'iv2Qa85fJrpUu0bq',
				city : 'qtLrchvg8MIybfzA',
				street : 'BxZGWOM84LNa7sR6',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1949080.8701171875,
				y : 867279.607421875,
				w : -1607023.392578125,
				h : 1833531.3984375,
				rotation : 2019410.2685546875,
				radius : 1428345.912109375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -9374.224609375,
				y : 1058385.4580078125,
				w : -292543.833984375,
				h : 104798.400390625,
				rotation : -66429.2021484375,
				radius : 856650.0986328125,
			),
			channel_id : 8514853037140795875,
			msg_id : 33,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 204783.9375,
				y : -1960764.2099609375,
				w : 1784317.3310546875,
				h : 1534176.2236328125,
				rotation : -305344.970703125,
				radius : -1440477.5830078125,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 48,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1439599.2236328125,
				y : -329086.1904296875,
				w : 43105.9189453125,
				h : -674320.0390625,
				rotation : -1449703.8095703125,
				radius : 184130.4296875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1437895.783203125,
				y : -458334.978515625,
				w : -1860160.8515625,
				h : 1170907.8857421875,
				rotation : -1707973.6953125,
				radius : 1250914.79296875,
			),
			emoji : 'tYkqb3iCHIrsjoKv',
			temperature_c : -1674075.1396484375,
			color : 42,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1524306.3798828125,
				y : 1166801.91796875,
				w : 1394368.3359375,
				h : 1356916.59375,
				rotation : -473148.9423828125,
				radius : 982259.53515625,
			),
			slug : '2NAPcjb6ZpYXkrtW',
		),
	),
	caption : 'Ujro0JDH8EmSBwVC',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 99,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 9,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : 'yfDEPg6FvxIN9THL',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : 7852045178932288589,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 21,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 68,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 89,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 27,
			document_id : 6902767376197859912,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 46,
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
					user_id : 7493935445041881934,
					access_hash : 3622616193028920780,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 99,
					user_id : -5599995372574320030,
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
					user_id : 3708209217302646070,
					access_hash : -8601049767065831654,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 18,
					user_id : 7148919226648099148,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-1681368328085860188),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(2328710389906789150),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -3942210151421401358,
	period : 71,
	fwd_from_id : $client->inputPeerEmpty(),
	fwd_from_story : 72,
	albums : array(64),
);
```