# messages.checkedHistoryImportPeer

**Description** : *Contains a confirmation text to be shown to the user, upon importing chat history, click here for more info &raquo;*

**Layer** : 227

```tl
messages.checkedHistoryImportPeer#a24de717 confirm_text:string = messages.CheckedHistoryImportPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>confirm_text</mark> | [`string`](type/string) | A confirmation text to be shown to the user, upon importing chat history » |

---

## Type

[messages.CheckedHistoryImportPeer](type/messages.CheckedHistoryImportPeer)

---

## Example

```php
$messagesCheckedHistoryImportPeer = $client->messages->checkedHistoryImportPeer(
	confirm_text : 'zZbNj68Q0Yu7TrPc',
);
```