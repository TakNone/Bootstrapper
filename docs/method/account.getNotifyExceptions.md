# account.getNotifyExceptions

**Description** : *Returns list of chats with non-default notification settings*

**Layer** : 211

```tl
account.getNotifyExceptions#53577479 flags:# compare_sound:flags.1?true compare_stories:flags.2?true peer:flags.0?InputNotifyPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **compare_sound** | [`flags.1?true`](type/true) | If set, chats with non-default sound will be returned |
| **compare_stories** | [`flags.2?true`](type/true) | If set, chats with non-default notification settings for stories will be returned |
| **peer** | [`flags.0?InputNotifyPeer`](type/InputNotifyPeer) | If specified, only chats of the specified category will be returned |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->account->getNotifyExceptions(
	compare_sound : true,
	compare_stories : true,
	peer : $client->inputNotifyPeer(
		peer : $client->inputPeerEmpty(),
	),
);
```