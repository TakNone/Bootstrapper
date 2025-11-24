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
	id : 73,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 1056247.4072265625,
				y : 235542.26953125,
				w : -1866676.1142578125,
				h : -1898510.849609375,
				rotation : -189890.2509765625,
				radius : 857794.3330078125,
			),
			geo : $client->geoPointEmpty(),
			title : 'LNp3m7un5dtHoyIe',
			address : 'L1IfPYhDdNnE9Qqx',
			provider : 'xMcg4EwpHfaSDKke',
			venue_id : 'onaHR2JMAL4875q0',
			venue_type : 'lMyWCYvj0SRKBiJF',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1048132.10546875,
				y : -1738752.5859375,
				w : -1945193.619140625,
				h : 1047986.51171875,
				rotation : -116101.60546875,
				radius : -1342119.1669921875,
			),
			query_id : 8777809523044295184,
			result_id : '2GlwOmon8FASQj5i',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -998586.9091796875,
				y : -1456953.6416015625,
				w : -1163222.9306640625,
				h : 375074.298828125,
				rotation : 453865.0498046875,
				radius : -800790.6376953125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : '5wa0CnLkv9E4XYmi',
				state : 'gzO7fJAqdYNKEiZb',
				city : 'WHm2tXvGpzQFngV4',
				street : 'DUlyPw46W82SHh7d',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1803138.2412109375,
				y : 638598.9814453125,
				w : 1882723.748046875,
				h : -634084.8486328125,
				rotation : 887365.9609375,
				radius : -337265.44140625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 776592.5556640625,
				y : -1123281.404296875,
				w : -1365075.787109375,
				h : 248671.2392578125,
				rotation : -954301.82421875,
				radius : -277840.9541015625,
			),
			channel_id : 7818251499161502279,
			msg_id : 37,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -737730.0859375,
				y : 1463291.21875,
				w : 1564607.4716796875,
				h : -1387965.2880859375,
				rotation : -769987.87109375,
				radius : -1342167.7861328125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 5,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1699134.681640625,
				y : -646970.8681640625,
				w : -837666.7607421875,
				h : 767067.2255859375,
				rotation : -423104.1640625,
				radius : 1955058.0791015625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1951920.0322265625,
				y : 738384.2490234375,
				w : 1891500.564453125,
				h : -447861.4140625,
				rotation : -1063838.2392578125,
				radius : -243884.5107421875,
			),
			emoji : 'ltq8nIE16Mh9STpi',
			temperature_c : -107004.4140625,
			color : 66,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1890088.06640625,
				y : 245398.708984375,
				w : 712797.3935546875,
				h : -572501.5146484375,
				rotation : -236001.744140625,
				radius : -1745457.0078125,
			),
			slug : 'n1GUst6qaQ4WIYdk',
		),
	),
	caption : 'Qfd0kNnDqYEPlFGX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 44,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 37,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 38,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 72,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 71,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 19,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 48,
			language : 'M9GetEla8omk2xIc',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : 3107556373626393935,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 87,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 65,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 20,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 90,
			document_id : -736033756731210193,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 10,
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
			chats : array(2121781510780465279),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-858559178354492834),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```