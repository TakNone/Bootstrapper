# PublicForward

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 211

```tl
publicForwardMessage#1f2bf4a message:Message = PublicForward;
publicForwardStory#edf3add0 peer:Peer story:StoryItem = PublicForward;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**publicForwardMessage**](constructor/publicForwardMessage) | Contains info about a forward of a story as a message |
| [**publicForwardStory**](constructor/publicForwardStory) | Contains info about a forward of a story as a repost by a public channel |