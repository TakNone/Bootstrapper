# InputBotInlineMessage

**Description** : *Represents a sent inline message from the perspective of a bot*

**Layer** : 233

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageMediaGeo#96929a85 flags:# geo_point:InputGeoPoint heading:flags.0?int period:flags.1?int proximity_notification_radius:flags.3?int reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageMediaVenue#417bbf11 flags:# geo_point:InputGeoPoint title:string address:string provider:string venue_id:string venue_type:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageMediaContact#a6edbffd flags:# phone_number:string first_name:string last_name:string vcard:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageGame#4b425864 flags:# reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageMediaInvoice#d7e78225 flags:# title:string description:string photo:flags.0?InputWebDocument invoice:Invoice payload:bytes provider:string provider_data:DataJSON reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageMediaWebPage#bddcc510 flags:# invert_media:flags.3?true force_large_media:flags.4?true force_small_media:flags.5?true optional:flags.6?true message:string entities:flags.1?Vector<MessageEntity> url:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
inputBotInlineMessageRichMessage#b43df56c flags:# reply_markup:flags.2?ReplyMarkup rich_message:InputRichMessage = InputBotInlineMessage;
inputBotInlineMessageWidget#f597a3f0 flags:# allow_queries:flags.0?true shared_widget:flags.1?true invert_media:flags.6?true width:int height:int html:string public_data:flags.2?string chat_data:flags.3?string reply_markup:flags.4?ReplyMarkup message:string entities:flags.5?Vector<MessageEntity> = InputBotInlineMessage;
inputBotInlineMessageWidgetId#fe8b792b flags:# invert_media:flags.3?true widget_id:long chat_data:flags.0?string reply_markup:flags.1?ReplyMarkup message:string entities:flags.2?Vector<MessageEntity> = InputBotInlineMessage;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputBotInlineMessageMediaAuto**](constructor/inputBotInlineMessageMediaAuto) | A media |
| [**inputBotInlineMessageText**](constructor/inputBotInlineMessageText) | Simple text message |
| [**inputBotInlineMessageMediaGeo**](constructor/inputBotInlineMessageMediaGeo) | Geolocation |
| [**inputBotInlineMessageMediaVenue**](constructor/inputBotInlineMessageMediaVenue) | Venue |
| [**inputBotInlineMessageMediaContact**](constructor/inputBotInlineMessageMediaContact) | A contact |
| [**inputBotInlineMessageGame**](constructor/inputBotInlineMessageGame) | A game |
| [**inputBotInlineMessageMediaInvoice**](constructor/inputBotInlineMessageMediaInvoice) | An invoice |
| [**inputBotInlineMessageMediaWebPage**](constructor/inputBotInlineMessageMediaWebPage) | Specifies options that will be used to generate the link preview for the message, or even a standalone link preview without an attached message |
| [**inputBotInlineMessageRichMessage**](constructor/inputBotInlineMessageRichMessage) | NOTHING |
| [**inputBotInlineMessageWidget**](constructor/inputBotInlineMessageWidget) | NOTHING |
| [**inputBotInlineMessageWidgetId**](constructor/inputBotInlineMessageWidgetId) | NOTHING |