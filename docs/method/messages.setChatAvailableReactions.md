# messages.setChatAvailableReactions

**Description** : *Change the set of message reactions &raquo; that can be used in a certain group, supergroup or channel*

**Layer** : 218

```tl
messages.setChatAvailableReactions#864b2581 flags:# peer:InputPeer available_reactions:ChatReactions reactions_limit:flags.0?int paid_enabled:flags.1?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Group where to apply changes |
| <mark>available_reactions</mark> | [`ChatReactions`](type/ChatReactions) | Allowed reaction emojis |
| **reactions_limit** | [`flags.0?int`](type/int) | This flag may be used to impose a custom limit of unique reactions (i.e. a customizable version of appConfig.reactions_uniq_max); this field and the other info set by the method will then be available to users in channelFull and chatFull. If this flag is not set, the previously configured reactions_limit will not be altered |
| **paid_enabled** | [`flags.1?Bool`](type/Bool) | If this flag is set and a Bool is passed, the method will enable or disable paid message reactions ». If this flag is not set, the previously stored setting will not be changed |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |

---

## Example

```php
$updates = $client->messages->setChatAvailableReactions(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	available_reactions : $client->chatReactionsNone(),
	reactions_limit : 99,
	paid_enabled : false,
);
```