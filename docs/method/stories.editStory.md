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
	id : 52,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1498379.712890625,
				y : 238087.2880859375,
				w : -628637.240234375,
				h : -145522.2373046875,
				rotation : 1352514.9892578125,
				radius : -745407.0234375,
			),
			geo : $client->geoPointEmpty(),
			title : 'FBhodJzIsgE3Yn4D',
			address : 'Rn3QCyISfEb6V7Wx',
			provider : 'wN96MbClr3fBvJOW',
			venue_id : '68mRuPTMKlXGLxhF',
			venue_type : 'z8l1vjMR0AOQHWhE',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1398717.5126953125,
				y : 760987.6728515625,
				w : 514571.4541015625,
				h : 58707.5625,
				rotation : -1171597.177734375,
				radius : 1367706.515625,
			),
			query_id : -2337069001301149372,
			result_id : 'i0WPSbYEwae91Icy',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -757070.880859375,
				y : -2005369.0390625,
				w : 1995998.3779296875,
				h : 860255.166015625,
				rotation : -78419.662109375,
				radius : 915674.0927734375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'WXfjSQ832TnIsVgZ',
				state : 'HehQdr4Jsczyg5S0',
				city : 'PYfXEdlRMB1jI8LH',
				street : 'AXeEJKsg9ji4ITVl',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -9699.2451171875,
				y : -1525726.7880859375,
				w : 1485067.7373046875,
				h : 1305564.7578125,
				rotation : 744267.2001953125,
				radius : 1625143.0908203125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1929621.486328125,
				y : 1906246.41796875,
				w : -577747.275390625,
				h : 1489405.9208984375,
				rotation : 1682945.013671875,
				radius : 824650.6845703125,
			),
			channel_id : -7973008628152020391,
			msg_id : 20,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1106382.3232421875,
				y : -1980590.5263671875,
				w : 1482159.2099609375,
				h : -566241.7392578125,
				rotation : 1872959.0302734375,
				radius : 448777.1650390625,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 16,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1108463.7958984375,
				y : 1609611.20703125,
				w : 1753205.771484375,
				h : -755417.6640625,
				rotation : 1074823.365234375,
				radius : 453710.40234375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -781987.984375,
				y : 737602.61328125,
				w : -433255.9521484375,
				h : 2002281.2705078125,
				rotation : 1851043.5234375,
				radius : -828613.15625,
			),
			emoji : 'fhPiGXyWJS4ZFmMe',
			temperature_c : 1248104.46875,
			color : 66,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 351043.58203125,
				y : -1516901.134765625,
				w : -2067476.408203125,
				h : -773574.548828125,
				rotation : 364141.8193359375,
				radius : -1399141.5390625,
			),
			slug : '7Sp9umNZGbEgsFlc',
		),
	),
	caption : 'KdGRcIqTbvOuZzmj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 83,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 54,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 31,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 50,
			language : 'RXhiwVBp7dH0Jy2a',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 41,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : -359009073024627534,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 4,
			document_id : -8739285338454406009,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 17,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 68,
			date : 54,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 85,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 60,
			old_text : 'k4owjOzYxtmFH2ID',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 79,
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
			chats : array(7508404145277990406),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(3175230354956447397),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	music : $client->inputDocumentEmpty(),
);
```