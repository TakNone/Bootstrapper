# PostInteractionCounters

**Description** : *Interaction counters*

**Layer** : 211

```tl
postInteractionCountersMessage#e7058e7f msg_id:int views:int forwards:int reactions:int = PostInteractionCounters;
postInteractionCountersStory#8a480e27 story_id:int views:int forwards:int reactions:int = PostInteractionCounters;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**postInteractionCountersMessage**](constructor/postInteractionCountersMessage) | Interaction counters for a message |
| [**postInteractionCountersStory**](constructor/postInteractionCountersStory) | Interaction counters for a story |