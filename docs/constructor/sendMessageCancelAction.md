# sendMessageCancelAction

**Description** : *Invalidate all previous action updates. E.g. when user deletes entered text or aborts a video upload*

**Layer** : 211

```tl
sendMessageCancelAction#fd5ec8f5 = SendMessageAction;
```

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageCancelAction();
```