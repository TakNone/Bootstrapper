# StarGiftAttribute

**Description** : *An attribute of a collectible gift &raquo;*

**Layer** : 225

```tl
starGiftAttributeModel#565251e2 flags:# crafted:flags.0?true name:string document:Document rarity:StarGiftAttributeRarity = StarGiftAttribute;
starGiftAttributePattern#4e7085ea name:string document:Document rarity:StarGiftAttributeRarity = StarGiftAttribute;
starGiftAttributeBackdrop#9f2504e4 name:string backdrop_id:int center_color:int edge_color:int pattern_color:int text_color:int rarity:StarGiftAttributeRarity = StarGiftAttribute;
starGiftAttributeOriginalDetails#e0bff26c flags:# sender_id:flags.0?Peer recipient_id:Peer date:int message:flags.1?TextWithEntities = StarGiftAttribute;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**starGiftAttributeModel**](constructor/starGiftAttributeModel) | The model of a collectible gift » |
| [**starGiftAttributePattern**](constructor/starGiftAttributePattern) | A sticker applied on the backdrop of a collectible gift » using a repeating pattern |
| [**starGiftAttributeBackdrop**](constructor/starGiftAttributeBackdrop) | The backdrop of a collectible gift » |
| [**starGiftAttributeOriginalDetails**](constructor/starGiftAttributeOriginalDetails) | Info about the sender, receiver and message attached to the original gift », before it was upgraded to a collectible gift » |