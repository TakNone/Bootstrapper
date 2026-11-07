# bots.exportedBotToken

**Description** : *The bot token of a managed bot &raquo;, exported by the manager bot*

**Layer** : 233

```tl
bots.exportedBotToken#3c60b621 token:string = bots.ExportedBotToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | The bot token of the managed bot |

---

## Type

[bots.ExportedBotToken](type/bots.ExportedBotToken)

---

## Example

```php
$botsExportedBotToken = $client->bots->exportedBotToken(
	token : 'h4XVcBCPaEekD51S',
);
```