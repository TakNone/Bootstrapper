# messages.editFactCheck

**Description** : *Edit/create a fact-check on a message*

**Layer** : 211

```tl
messages.editFactCheck#589ee75 peer:InputPeer msg_id:int text:TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Fact-check (maximum UTF-8 length specified in appConfig.factcheck_length_limit) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ACTION_FORBIDDEN** | `403` | You cannot execute this action |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editFactCheck(
	peer : $client->inputPeerEmpty(),
	msg_id : 66,
	text : $client->textWithEntities(
		text : '8eUnBdgHCyD59XJm',
		entities : array(
			$client->messageEntityUnknown(
				offset : 30,
				length : 23,
			),
			$client->messageEntityMention(
				offset : 52,
				length : 84,
			),
			$client->messageEntityHashtag(
				offset : 4,
				length : 36,
			),
			$client->messageEntityBotCommand(
				offset : 87,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 34,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 52,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 90,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 31,
				length : 81,
			),
			$client->messageEntityCode(
				offset : 71,
				length : 45,
			),
			$client->messageEntityPre(
				offset : 82,
				length : 75,
				language : 'VvEgm0Co167zsPRF',
			),
			$client->messageEntityTextUrl(
				offset : 59,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 60,
				length : 4,
				user_id : 732553116128625188,
			),
			$client->inputMessageEntityMentionName(
				offset : 6,
				length : 49,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 84,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 92,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 39,
				length : 40,
			),
			$client->messageEntityStrike(
				offset : 78,
				length : 58,
			),
			$client->messageEntityBankCard(
				offset : 31,
				length : 66,
			),
			$client->messageEntitySpoiler(
				offset : 23,
				length : 15,
			),
			$client->messageEntityCustomEmoji(
				offset : 3,
				length : 5,
				document_id : -9174446810982072299,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 37,
				length : 31,
			),
		),
	),
);
```