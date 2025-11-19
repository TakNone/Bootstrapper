# messages.getDefaultHistoryTTL

**Description** : *Gets the default value of the Time\-To\-Live setting, applied to all new chats*

**Layer** : 218

```tl
messages.getDefaultHistoryTTL#658b7188 = DefaultHistoryTTL;
```

---

## Result

[DefaultHistoryTTL](type/DefaultHistoryTTL)

---

## Example

```php
$defaultHistoryTTL = $client->messages->getDefaultHistoryTTL();
```