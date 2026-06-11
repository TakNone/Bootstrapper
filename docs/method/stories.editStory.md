# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 227

```tl
stories.editStory#2c63a72b flags:# peer:InputPeer id:int media:flags.0?InputMedia media_areas:flags.3?Vector<MediaArea> caption:flags.1?string entities:flags.1?Vector<MessageEntity> privacy_rules:flags.2?Vector<InputPrivacyRule> music:flags.4?InputDocument = Updates;
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
| **music** | [`flags.4?InputDocument`](type/InputDocument) | NOTHING |

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
	id : 75,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1784713.93359375,
				y : 1998531.8125,
				w : 1660935.4892578125,
				h : 1247261.927734375,
				rotation : 1035253.1474609375,
				radius : -725079.935546875,
			),
			geo : $client->geoPointEmpty(),
			title : 'hNHbfEIWtOJer8AR',
			address : 'W9uwt8lqAjfSDxC1',
			provider : 'WACtwxapN8BXTkS0',
			venue_id : 'HZnX1eqRMai7C90W',
			venue_type : 'xVN6Kqtv4BI853Wh',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 858257.89453125,
				y : 1466947.0576171875,
				w : 1636829.84375,
				h : -2055532.9697265625,
				rotation : 724769.822265625,
				radius : -941623.3447265625,
			),
			query_id : -4991780938578407491,
			result_id : 'rfRXzSiIeq70T4AG',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -786465.876953125,
				y : -1544830.638671875,
				w : 1015888.1416015625,
				h : 2022349.1650390625,
				rotation : 1956791.14453125,
				radius : -945952.4072265625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'e8l2TguIMGo7k63D',
				state : 'JrIaAtmWBOSj13xn',
				city : 'oZfyLCO2YEDVsQxH',
				street : 'D5pM3oOdjJzU2Fgx',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1643341.5185546875,
				y : 1332331.25,
				w : -1535593.55078125,
				h : 1383279.6748046875,
				rotation : -1179076.1171875,
				radius : 1878017.4140625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 2009432.2490234375,
				y : -1270366.0029296875,
				w : -386352.943359375,
				h : -186902.3955078125,
				rotation : 766598.3388671875,
				radius : 38261.4677734375,
			),
			channel_id : -2719234375231523833,
			msg_id : 99,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1904231.197265625,
				y : 589813.373046875,
				w : 979163.46484375,
				h : 1714193.90625,
				rotation : -1070933.62890625,
				radius : 1597402.142578125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 65,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 852746.4541015625,
				y : 1147470.8583984375,
				w : 848629.353515625,
				h : -185185.08984375,
				rotation : 1844089.7548828125,
				radius : -1168424.0419921875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1204337.2431640625,
				y : -1112582.87109375,
				w : 1207369.064453125,
				h : 24395.3203125,
				rotation : -1591372.8369140625,
				radius : 1694593.904296875,
			),
			emoji : 'dQqF5RycSVoJDsr1',
			temperature_c : 331945.384765625,
			color : 78,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1341929.306640625,
				y : 165115.505859375,
				w : -340768.876953125,
				h : -346450.556640625,
				rotation : -1961683.9755859375,
				radius : 618301.0009765625,
			),
			slug : 'lS7nrg95fOh8BE3t',
		),
	),
	caption : 'yY2hr9ANgCQ8JMnj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 25,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 92,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 55,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 63,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 99,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 7,
			language : 'BzNAXUFsu3Yd5ckQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 25,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : -2407432691694914639,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 61,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 4,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 12,
			document_id : -1633614290131482585,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 67,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 74,
			date : 53,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 79,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 86,
			old_text : 'rmSGHuiU0DeZwK24',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 45,
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
			chats : array(9104807092925208964),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-6009510046090166643),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	music : $client->inputDocumentEmpty(),
);
```