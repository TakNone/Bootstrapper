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
	id : 26,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1016132.845703125,
				y : -642867.58984375,
				w : 779685.84765625,
				h : -1538041.087890625,
				rotation : -1997971.947265625,
				radius : -1283105.6064453125,
			),
			geo : $client->geoPointEmpty(),
			title : 'LgQFKxuS90iAyDwk',
			address : 'VjSQJIrkYo0diwMK',
			provider : 'RSbqMgU1WJNldewG',
			venue_id : 'opJfC9N8s3wKPMOg',
			venue_type : 'jsXigbFADVOPwyIv',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1508733.90625,
				y : -482004.93359375,
				w : -1643726.8427734375,
				h : -1739465.822265625,
				rotation : -185811.2470703125,
				radius : 1908970.53125,
			),
			query_id : -7033657210947260438,
			result_id : '8j6l0EBU32f9yoIY',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1036584.7265625,
				y : 1698290.8232421875,
				w : -1932883.0712890625,
				h : -1000108.7841796875,
				rotation : -1759692.3251953125,
				radius : -2045459.3828125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'BLt17mfikjMOwars',
				state : '8qWBNx9CYZv2anrb',
				city : 'hiJEoz9dFYITf7AV',
				street : 'LihA7UxOFYtHZPvs',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1048465.919921875,
				y : -441847.724609375,
				w : 2065600.71875,
				h : 1700167.833984375,
				rotation : 1907485.150390625,
				radius : 1285820.2578125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 698807.283203125,
				y : -1009871.9287109375,
				w : -272872.271484375,
				h : -369069.5341796875,
				rotation : 928491.0693359375,
				radius : -623770.935546875,
			),
			channel_id : 5761599657662270763,
			msg_id : 79,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1276535.8564453125,
				y : 430970.85546875,
				w : 484415.48046875,
				h : -1741718.66015625,
				rotation : 1703650.265625,
				radius : 606489.046875,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 84,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1313401.107421875,
				y : -844137.0751953125,
				w : -1046779.1787109375,
				h : -183031.3154296875,
				rotation : 811391.703125,
				radius : 612777.74609375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -467303.94140625,
				y : 295329.7646484375,
				w : 877415.701171875,
				h : 1516774.2890625,
				rotation : -2010405.837890625,
				radius : 1090301.5458984375,
			),
			emoji : 'v83o7KnT4WsO5ZwV',
			temperature_c : -1631399.404296875,
			color : 41,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 459404.81640625,
				y : -786351.5712890625,
				w : -932360.427734375,
				h : 415097.5146484375,
				rotation : -1028493.986328125,
				radius : -587884.0625,
			),
			slug : 'WH8SVseyo5gQKtD6',
		),
	),
	caption : 'zqb8UMpyKx9dW5NF',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 46,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 14,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 33,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 88,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 67,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : 'wmiBXvfMN7cFAydZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 72,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : 1463428085712363277,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 31,
			document_id : -2688564114148499539,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 1,
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
			chats : array(3107588300096568946),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(6370581468361817489),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```