# stories.getAllReadPeerStories

**Description** : *Obtain the latest read story ID for all peers when first logging in, returned as a list of updateReadStories updates, see here » for more info*

**Layer** : 211

```tl
stories.getAllReadPeerStories#9b5ae7f9 = Updates;
```

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->stories->getAllReadPeerStories();
```