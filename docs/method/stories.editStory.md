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
	id : 21,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 440043.6689453125,
				y : -1372021.224609375,
				w : 1965409.3359375,
				h : 1771867.291015625,
				rotation : 2029757.392578125,
				radius : 279345.3251953125,
			),
			geo : $client->geoPointEmpty(),
			title : 'aSRNH9YuTpymPXV6',
			address : '1ouYLdkJcVhiXG6T',
			provider : 'epUgdMFS74wL0Xmf',
			venue_id : 'JWsSNbpyLXrndvGV',
			venue_type : 'QO5EtDbgHwTZBsaV',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1339291.859375,
				y : -280966.681640625,
				w : -1131698.8271484375,
				h : 2084916.072265625,
				rotation : -789088.9140625,
				radius : -1232748.5224609375,
			),
			query_id : -5470772561272976142,
			result_id : 'ZnNLXGJK3VSog12P',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 94579.3515625,
				y : -798623.90234375,
				w : 1137004.4658203125,
				h : -223899.1298828125,
				rotation : -532609.9111328125,
				radius : 1219921.3154296875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'p4Wkf3tGOl6wSgQb',
				state : 'MyicJs9Abk8Sfzex',
				city : 'ZvUJFafjuEtW1Vlb',
				street : 'eqzhWVnQX1wFUNOC',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1612847.283203125,
				y : 2060233.6806640625,
				w : 419635.115234375,
				h : 1688936.857421875,
				rotation : -933007.37109375,
				radius : 259236.0537109375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 611942.2099609375,
				y : -1337989.568359375,
				w : -1775525.095703125,
				h : 2082816.19140625,
				rotation : 1545886.267578125,
				radius : -1750351.671875,
			),
			channel_id : 4717711407272142197,
			msg_id : 51,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1712779.4111328125,
				y : 1959292.2763671875,
				w : -29991.4931640625,
				h : 1094466.1162109375,
				rotation : 692164.46875,
				radius : -1956127.19140625,
			),
			channel : $client->get_input_channel(peer : '@LiveProto'),
			msg_id : 1,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1955606.3974609375,
				y : 428347.9482421875,
				w : -1085425.392578125,
				h : -1238443.9052734375,
				rotation : 1730251.40234375,
				radius : 1241974.767578125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1466014.7802734375,
				y : -210486.48828125,
				w : 1900065.1416015625,
				h : 1890280.3388671875,
				rotation : 1485578.9375,
				radius : -714613.6962890625,
			),
			emoji : 'JPElnHsSIK6uDTG4',
			temperature_c : -1647069.42578125,
			color : 19,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1884295.9453125,
				y : 1879770.263671875,
				w : 956984.7861328125,
				h : -1278913.1328125,
				rotation : 879943.0068359375,
				radius : -1133144.19921875,
			),
			slug : 'w7zROCH5iDpMK9lh',
		),
	),
	caption : 'cgYS9onkPh6rxXel',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 69,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 98,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 28,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 59,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 34,
			language : 'PQu4oH8I5CNFY9zZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 37,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 63,
			user_id : -7821727966487569282,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 68,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : -2517130675382963366,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 96,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(peer : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(peer : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(8384579636547623133),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(6108386464705279865),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```