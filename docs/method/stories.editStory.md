# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 218

```tl
stories.editStory#b583ba46 flags:# peer:InputPeer id:int media:flags.0?InputMedia media_areas:flags.3?Vector<MediaArea> caption:flags.1?string entities:flags.1?Vector<MessageEntity> privacy_rules:flags.2?Vector<InputPrivacyRule> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was posted |
| <mark>id</mark> | [`int`](type/int) | ID of story to edit |
| **media** | [`flags.0?InputMedia`](type/InputMedia) | If specified, replaces the story media |
| **media_areas** | [`flags.3?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.1?string`](type/string) | If specified, replaces the story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in the caption, if allowed by the stories_entities client configuration parameter » |
| **privacy_rules** | [`flags.2?Vector<InputPrivacyRule>`](type/InputPrivacyRule) | If specified, alters the privacy settings » of the story, changing who can or can't view the story |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_NOT_MODIFIED** | `400` | The new story information you passed is equal to the previous story information, thus it wasn't modified |

---

## Example

```php
$updates = $client->stories->editStory(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 87,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -842858.0625,
				y : -284132.501953125,
				w : -1327340.66015625,
				h : -1018628.646484375,
				rotation : 1513229.8525390625,
				radius : 2096352.515625,
			),
			geo : $client->geoPointEmpty(),
			title : 'PZmEpuX9T6KcBd7r',
			address : 'Z0LGMwQYfxgAWEdy',
			provider : 'BYVSKGMrjfPAiNtI',
			venue_id : 'pJdPrtEHwiX60OsK',
			venue_type : 'SKFfoeuCQUDk31mN',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1988408.013671875,
				y : -417925.955078125,
				w : 1809331.0380859375,
				h : -409613.4013671875,
				rotation : 890128.841796875,
				radius : -1813950.8876953125,
			),
			query_id : -3281529465818523154,
			result_id : 'pMlYdN7EhCL52TOD',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 229758.6953125,
				y : -1166672.919921875,
				w : 1966998.546875,
				h : -157136.15625,
				rotation : -1391531.80859375,
				radius : -259450.8662109375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'gBl3A1uVZGQ7Oivc',
				state : 'G2A9IZ7mY6BcJN8y',
				city : 'HLQuCGSblv71ygXR',
				street : 'gi23bT8HzSy4CQP0',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1357617.396484375,
				y : -522360.1484375,
				w : 1153279.810546875,
				h : -829011.009765625,
				rotation : 1342121.6708984375,
				radius : -1557537.0927734375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -645479.61328125,
				y : -1036480.0166015625,
				w : 169021.9169921875,
				h : 870954.33984375,
				rotation : -1091391.59765625,
				radius : 369319.177734375,
			),
			channel_id : 1745714988978963934,
			msg_id : 95,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 201980.91796875,
				y : -1014196.6630859375,
				w : -1919903.2041015625,
				h : -1057284.783203125,
				rotation : -271849.13671875,
				radius : 1996518.8662109375,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 68,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 367580.0791015625,
				y : 1737657.447265625,
				w : -492969.2509765625,
				h : 1454767.466796875,
				rotation : 1974354.0927734375,
				radius : 1353338.58984375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -272205.6123046875,
				y : -506994.9384765625,
				w : 1567.8173828125,
				h : -1847135.169921875,
				rotation : -1067754.5791015625,
				radius : 793840.9736328125,
			),
			emoji : 'Go6MmnTSQYEFcU3u',
			temperature_c : -728114.8759765625,
			color : 88,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -648441.0390625,
				y : -1385519.828125,
				w : 499915.0146484375,
				h : 337713.4228515625,
				rotation : -199412.5361328125,
				radius : 1775508.51953125,
			),
			slug : '2Wz7JGP5Bh9iNtSu',
		),
	),
	caption : 'IRovpGm79TiY86EO',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 0,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 26,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 85,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 12,
			language : 'CEykT3XqgH5P6IjZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 5,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : 1655811153164101484,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 40,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 88,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : 1422370086460725981,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
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
			chats : array(-1331353720715610430),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(661718541565211625),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```