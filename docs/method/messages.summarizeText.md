# messages.summarizeText

**Description** : *Summarize the contents of a message with AI, see here &raquo; for more info*

**Layer** : 233

```tl
messages.summarizeText#abbbd346 flags:# peer:InputPeer id:int to_lang:flags.0?string tone:flags.2?string = TextWithEntities;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where the message is located |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| **to_lang** | [`flags.0?string`](type/string) | If set, generates the summary in the specified target language (two-letter ISO 639-1 language code) instead of the message's language |
| **tone** | [`flags.2?string`](type/string) | If set, rephrases the summary using the specified AI composer tone » (pass the tone identifier) |

---

## Result

[TextWithEntities](type/TextWithEntities)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_TEXT_TOO_LONG** | `400` | The specified text is too long |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$textWithEntities = $client->messages->summarizeText(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 2,
	to_lang : '2NlStwxhnv8digKy',
	tone : 'R5IFmZOVzuK0jb3l',
);
```