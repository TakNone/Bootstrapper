# chatlists.leaveChatlist

**Description** : *Delete a folder imported using a chat folder deep link &raquo;*

**Layer** : 218

```tl
chatlists.leaveChatlist#74fae13a chatlist:InputChatlist peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | Folder ID |
| <mark>peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Also leave the specified channels and groups |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |

---

## Example

```php
$updates = $client->chatlists->leaveChatlist(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 89,
	),
	peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```