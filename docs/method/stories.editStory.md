# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 211

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
	peer : $client->inputPeerEmpty(),
	id : 80,
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1327243.0380859375,
				y : 1598189.8251953125,
				w : 1045750.4306640625,
				h : 284750.2607421875,
				rotation : -1960232.6103515625,
				radius : 51732.0791015625,
			),
			geo : $client->geoPointEmpty(),
			title : 'T5Fapj1ISlE2vxoK',
			address : 'hiAOJ64x7NPyZ0sl',
			provider : 'aL8uGWPecVthdKD0',
			venue_id : '8LEzNp9JZkSRwf57',
			venue_type : 't9D01WMmkjs4gFac',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -120058.283203125,
				y : 1442842.6015625,
				w : -1687468.0654296875,
				h : -531431.984375,
				rotation : 398808.23828125,
				radius : -765779.6708984375,
			),
			query_id : -2347771135195200951,
			result_id : '4KNLpXfOb7YDwEqW',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1151098.95703125,
				y : 686431.0419921875,
				w : -1893678.388671875,
				h : -2058560.8603515625,
				rotation : 1628266.8720703125,
				radius : -1773617.63671875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'N5qOXnPj9VzifIvc',
				state : 'O5ixpVYAhTBZncvo',
				city : '7yej3rixWus0Fgn5',
				street : 'X5VCSzgD6lcNywkm',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -86128.13671875,
				y : 7360.7236328125,
				w : 1236873.052734375,
				h : 303600.46875,
				rotation : 386378.154296875,
				radius : -1485983.794921875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1293538.9013671875,
				y : 145174.5830078125,
				w : 646357.486328125,
				h : 1066101.4775390625,
				rotation : -800180.802734375,
				radius : 730602.9404296875,
			),
			channel_id : 2345967772978561582,
			msg_id : 19,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 589162.2255859375,
				y : -762554.662109375,
				w : -1542704.2412109375,
				h : -934032.9580078125,
				rotation : 1938502.8359375,
				radius : -729119.9365234375,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 17,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -2068415.375,
				y : -232989.556640625,
				w : -641000.2744140625,
				h : -461274.8896484375,
				rotation : 575605.0712890625,
				radius : 1333174.8515625,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -753642.02734375,
				y : 1100607.544921875,
				w : 1350618.4326171875,
				h : -1970442.740234375,
				rotation : 1796358.5869140625,
				radius : 72738.5703125,
			),
			emoji : 'oT2nI358FhYvsE0u',
			temperature_c : -2043231.7451171875,
			color : 50,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1665358.4912109375,
				y : -1105678.111328125,
				w : -1679569.4375,
				h : 477455.017578125,
				rotation : 1629642.623046875,
				radius : -1801568.0107421875,
			),
			slug : 'J62uxIW0Ev7oNDLS',
		),
	),
	caption : '9C2hoFj4wgJeP10W',
	entities : array(
		$client->messageEntityUnknown(
			offset : 21,
			length : 40,
		),
		$client->messageEntityMention(
			offset : 84,
			length : 34,
		),
		$client->messageEntityHashtag(
			offset : 37,
			length : 20,
		),
		$client->messageEntityBotCommand(
			offset : 11,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 95,
			length : 16,
		),
		$client->messageEntityEmail(
			offset : 86,
			length : 92,
		),
		$client->messageEntityBold(
			offset : 57,
			length : 46,
		),
		$client->messageEntityItalic(
			offset : 70,
			length : 26,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 60,
		),
		$client->messageEntityPre(
			offset : 97,
			length : 36,
			language : 'Q3bD1Mk4hCGm79Oc',
		),
		$client->messageEntityTextUrl(
			offset : 1,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 44,
			length : 42,
			user_id : 3317177961361735126,
		),
		$client->inputMessageEntityMentionName(
			offset : 33,
			length : 31,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 26,
			length : 13,
		),
		$client->messageEntityCashtag(
			offset : 1,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 34,
			length : 100,
		),
		$client->messageEntityStrike(
			offset : 98,
			length : 80,
		),
		$client->messageEntityBankCard(
			offset : 2,
			length : 53,
		),
		$client->messageEntitySpoiler(
			offset : 3,
			length : 50,
		),
		$client->messageEntityCustomEmoji(
			offset : 39,
			length : 88,
			document_id : 9131735996441921775,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 31,
			length : 60,
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
					user_id : -6932861857963694385,
					access_hash : -6233552478841978781,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 7,
					user_id : -3782475343744121905,
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
					user_id : 6432152031747870288,
					access_hash : -691807017532739867,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 84,
					user_id : 6026204274645299530,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(379870779303133343),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-6661841144727135542),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```