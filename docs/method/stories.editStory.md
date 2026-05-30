# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 222

```tl
stories.editStory#b583ba46 flags:# peer:InputPeer id:int media:flags.0?InputMedia media_areas:flags.3?Vector<MediaArea> caption:flags.1?string entities:flags.1?Vector<MessageEntity> privacy_rules:flags.2?Vector<InputPrivacyRule> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 92,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1015493.7880859375,
				y : 957185.439453125,
				w : 1344554.251953125,
				h : -859105.818359375,
				rotation : -1625735.94140625,
				radius : -1099227.4423828125,
			),
			geo : $client->geoPointEmpty(),
			title : 'iC07gMO3Np1yK82B',
			address : 'AwLcdUHBivVEkMXF',
			provider : 'xE7aonAyGvfTR3SB',
			venue_id : '9z2rOxAQFy5EvLBt',
			venue_type : 'fTBgkI4iUw1Clzet',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1192240.484375,
				y : 2002366.1328125,
				w : 1633401.22265625,
				h : 1852077.384765625,
				rotation : -1270874.6494140625,
				radius : -654392.3193359375,
			),
			query_id : -1247507566753791718,
			result_id : '4BqwDZP95enHOYS3',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -783075.380859375,
				y : -2070592.3134765625,
				w : -1936982.8720703125,
				h : 1489611.806640625,
				rotation : -1314227.7138671875,
				radius : -161136.4521484375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'aqLsIKwoHRz78Bdp',
				state : 'HWagZYQ97MCVAlPn',
				city : 'fTziWlkRNMVqUD9L',
				street : 'vd0tCKF5ONxE7cqz',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1518433.8388671875,
				y : -1792699.595703125,
				w : 49186.693359375,
				h : 1554720.3623046875,
				rotation : 1778067.12890625,
				radius : -357331.96875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1348565.83203125,
				y : 1470809.0341796875,
				w : 131210.2119140625,
				h : -1466653.4560546875,
				rotation : -1506872.486328125,
				radius : 130902.7236328125,
			),
			channel_id : -8571264550621797241,
			msg_id : 18,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -716611.037109375,
				y : 788001.28515625,
				w : -2012298.9404296875,
				h : -5980.2734375,
				rotation : 14418.7646484375,
				radius : -446966.05078125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 56,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 524039.2822265625,
				y : -791413.900390625,
				w : 1127701.7568359375,
				h : 635694.4072265625,
				rotation : -903252.83203125,
				radius : 1956479.662109375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 2044347.7587890625,
				y : 430772.7333984375,
				w : -1340129.8154296875,
				h : 614931.658203125,
				rotation : 710275.81640625,
				radius : -278195.654296875,
			),
			emoji : 'rwaup7l6ZGHPBhYF',
			temperature_c : -732208.0166015625,
			color : 64,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 108271.119140625,
				y : 1543454.1484375,
				w : -823415.2880859375,
				h : -1794831.705078125,
				rotation : -78598.013671875,
				radius : -1267116.6171875,
			),
			slug : 'kCGvZb0f3wHlUeaj',
		),
	),
	caption : 'N2fDyHXA8mzEk4ML',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 3,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 17,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 16,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 61,
			language : 'CGqgQnV53SM4u8EN',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : 2086867260869911618,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 21,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 16,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : -2072620542684283589,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 15,
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
			chats : array(-7247521927803594148),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(4996128963305617458),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```