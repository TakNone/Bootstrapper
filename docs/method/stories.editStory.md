# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 233

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
| **music** | [`flags.4?InputDocument`](type/InputDocument) | If set, the new audio track to play as background music for the story |

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
	id : 28,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -952606.9013671875,
				y : 252659.2001953125,
				w : 1600652.72265625,
				h : -276808.4111328125,
				rotation : 1873474.548828125,
				radius : -84659.904296875,
			),
			geo : $client->geoPointEmpty(),
			title : 'kmAjhyZBHWDu3zOg',
			address : 'eFQXrkhvAow7M9qg',
			provider : 'SB6YwhMLP9AHvV4a',
			venue_id : 'WmCqwOYjtDKBQxge',
			venue_type : 'gZw6WPEMBq1VbFaz',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1814251.271484375,
				y : 1351615.5537109375,
				w : 2072044.888671875,
				h : -1063017.3720703125,
				rotation : -736734.654296875,
				radius : 1039895.072265625,
			),
			query_id : -2763159635430567411,
			result_id : 'k9yuzoKjMXF2WA3t',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1874749.2939453125,
				y : -633913.396484375,
				w : -217596.947265625,
				h : 507297.5537109375,
				rotation : 1231777.6923828125,
				radius : 1853072.259765625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'KE2BOMP6zN7dmS5f',
				state : 'sQnAuoWjaLO3cTSX',
				city : '3iS7r1xVWhJckvPO',
				street : 'EMiyk9KDGruLYAHj',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1556116.0302734375,
				y : -33576.669921875,
				w : -530581.330078125,
				h : -688213.8603515625,
				rotation : 179205.537109375,
				radius : 1103211.6982421875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1539074.6845703125,
				y : 1622570.5146484375,
				w : -1964883.3203125,
				h : -213871.939453125,
				rotation : 1058003.3935546875,
				radius : -787960.3330078125,
			),
			channel_id : -5244693070426046406,
			msg_id : 90,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -183653.28515625,
				y : -1693790.583984375,
				w : 1657864.1748046875,
				h : 93305.1123046875,
				rotation : 364769.5,
				radius : 965668.7353515625,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 34,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 202542.0283203125,
				y : 759529.1640625,
				w : -770853.6298828125,
				h : -679044.1826171875,
				rotation : 2015173.2119140625,
				radius : -1826376.15234375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 528074.724609375,
				y : -1142227.072265625,
				w : 598123.130859375,
				h : 1988679.3603515625,
				rotation : 395131.0400390625,
				radius : 1751659.0185546875,
			),
			emoji : 'wWhUtKNEkm2y7inb',
			temperature_c : -1515209.65234375,
			color : 63,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -169062.0849609375,
				y : 2022643.35546875,
				w : -296391.58984375,
				h : -691094.9287109375,
				rotation : -371107.501953125,
				radius : 1660180.9287109375,
			),
			slug : '6UEKA2lW3uxthLdI',
		),
	),
	caption : 'Lc3V1WOT6wq8kifB',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 32,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 75,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 0,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 28,
			language : '4GaLdDKXQztsPcNh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 86,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : 6705299837367629116,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 93,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 8,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 75,
			document_id : -7547561523129062376,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 60,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 28,
			date : 57,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 17,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 66,
			old_text : '4NRChWEsLOf5d2GK',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 81,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 27,
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
			chats : array(3780602648118542482),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-7188218085070222084),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	music : $client->inputDocumentEmpty(),
);
```