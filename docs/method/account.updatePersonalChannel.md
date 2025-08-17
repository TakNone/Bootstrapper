# account.updatePersonalChannel

**Description** : *Associate (or remove) a personal channel », that will be listed on our personal profile page »*

**Layer** : 211

```tl
account.updatePersonalChannel#d94305e0 channel:InputChannel = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel, pass inputChannelEmpty to remove it |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updatePersonalChannel(
	channel : $client->inputChannelEmpty(),
);
```