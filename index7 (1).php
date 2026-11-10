<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EsotherIA — Dossier d’analyses et bilan transversal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<!-- Polices système : pas de requête Google Fonts, chargement plus rapide et confidentialité améliorée. -->
<style>
:root{
  --ink:#0f1226;--muted:#6b7189;--line:#e8ecf6;--bg:#f5f6fb;--card:#fff;
  --brand:#5b5ef0;--brand2:#8b5cf6;--cyan:#06b6d4;--green:#10b981;--amber:#f59e0b;--rose:#f43f5e;
  --gold:#d4a51f;
  --radius:20px;--radius-lg:24px;
  --shadow:0 4px 12px -4px rgba(16,24,40,.08),0 12px 32px -16px rgba(16,24,40,.14);
  --shadow-lg:0 8px 24px -8px rgba(16,24,40,.12),0 24px 60px -24px rgba(16,24,40,.22);
}
*{box-sizing:border-box}html,body{margin:0;padding:0}
body{font-family:system-ui,-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;color:var(--ink);background:var(--bg);-webkit-font-smoothing:antialiased;overflow-x:hidden;min-height:100vh;line-height:1.55}
h1,h2,h3,h4{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;letter-spacing:-.02em;line-height:1.2}
button{font-family:inherit}
.bg-orbs{position:fixed;inset:0;z-index:-2;pointer-events:none;background:
  radial-gradient(60vw 60vw at 5% -5%,rgba(91,94,240,.14),transparent 60%),
  radial-gradient(50vw 50vw at 105% 15%,rgba(6,182,212,.12),transparent 60%),
  radial-gradient(55vw 55vw at 50% 110%,rgba(139,92,246,.13),transparent 60%)}

/* Topbar */
.topbar{position:sticky;top:0;z-index:60;background:rgba(255,255,255,.88);backdrop-filter:blur(14px);border-bottom:1px solid var(--line)}
.topbar-inner{max-width:1320px;margin:0 auto;display:flex;align-items:center;gap:12px;padding:10px 20px}
.brand{display:flex;align-items:center;gap:.6rem;font-weight:700;font-size:1.15rem;text-decoration:none;color:var(--ink)}
.brand-mark{width:36px;height:36px;border-radius:11px;display:grid;place-items:center;color:#fff;background:linear-gradient(135deg,var(--brand),var(--brand2));box-shadow:0 6px 16px -6px rgba(91,94,240,.5)}
.brand-name em{font-style:normal;background:linear-gradient(135deg,var(--brand),var(--cyan));-webkit-background-clip:text;background-clip:text;color:transparent}
.pill{display:inline-flex;align-items:center;gap:.4rem;padding:.32rem .7rem;border-radius:999px;font-size:.76rem;font-weight:600;border:1px solid var(--line);background:#fff;color:var(--muted);white-space:nowrap}
.pill-soft{background:#eef2ff;border-color:#e0e7ff;color:#3730a3}
.pill-green{background:#ecfdf5;border-color:#d1fae5;color:#047857}
.pill-amber{background:#fffbeb;border-color:#fef3c7;color:#b45309}
.pill-rose{background:#fff1f2;border-color:#ffe4e6;color:#be123c}
.btn-ghost{background:#fff;border:1px solid var(--line);color:var(--ink);font-weight:600;border-radius:12px;padding:.5rem .9rem;font-size:.85rem;display:inline-flex;align-items:center;gap:.35rem;transition:all .15s}
.btn-ghost:hover{background:#f8fafc;transform:translateY(-1px)}

/* Wizard */
#view-wizard{min-height:calc(100vh - 64px);display:flex;align-items:flex-start;justify-content:center;padding:32px 16px 64px}
.deck{width:100%;max-width:1000px}
.slide{display:none}
.slide.active{display:block;animation:slideIn .4s cubic-bezier(.2,.8,.2,1)}
@keyframes slideIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:none}}
.slide-inner{background:var(--card);border:1px solid var(--line);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:40px 44px 32px;position:relative;overflow:hidden}
.slide-inner::before{content:"";position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--brand),var(--cyan),var(--brand2))}
@media(max-width:768px){.slide-inner{padding:26px 20px 22px;border-radius:var(--radius)}}
.eyebrow{font-size:.72rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--brand);margin-bottom:.7rem;display:flex;align-items:center;gap:.5rem}
.eyebrow .num{background:#eef2ff;color:#3730a3;border-radius:8px;padding:2px 8px;font-size:.7rem}
.slide-title{font-size:clamp(1.55rem,3vw,2.15rem);font-weight:700;margin-bottom:.5rem;letter-spacing:-.03em}
.slide-sub{color:var(--muted);margin-bottom:1.6rem;max-width:720px;font-size:.95rem}
.form-label{font-weight:600;font-size:.86rem;color:#334155;margin-bottom:.4rem;display:block}
.form-control,.form-select{border-radius:12px;border-color:#dde5f3;padding:.72rem .9rem;font-size:.92rem;transition:all .15s;font-family:inherit}
.form-control:focus,.form-select:focus{border-color:#c7d2fe;box-shadow:0 0 0 .22rem rgba(91,94,240,.14);outline:none}
.req::after{content:" *";color:var(--rose)}
.hint{font-size:.78rem;color:var(--muted);margin-top:.35rem}
.dnum{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;font-size:1.3rem;text-align:center;letter-spacing:.04em}
.field-err{border-color:var(--rose)!important;box-shadow:0 0 0 .2rem rgba(244,63,94,.15)!important}

/* QCM */
.qcm-group{display:flex;flex-direction:column;gap:.5rem;margin-bottom:1.2rem}
.qcm-item{display:block;border:1.5px solid var(--line);border-radius:12px;padding:.75rem 1rem;cursor:pointer;transition:all .12s;background:#fff;font-size:.9rem;margin:0;display:flex;align-items:center;gap:.6rem}
.qcm-item:hover{border-color:#c7d2fe;background:#f8faff;transform:translateX(2px)}
.qcm-item input{margin:0;accent-color:var(--brand);flex:0 0 auto}
.qcm-item.checked{border-color:var(--brand);background:#eef2ff;box-shadow:0 0 0 3px rgba(91,94,240,.08)}
.qcm-item .ico{font-size:1.1rem;flex:0 0 auto}

/* Range */
.range-row{display:grid;grid-template-columns:1fr 2fr auto;align-items:center;gap:14px;padding:.85rem 1rem;border:1px solid var(--line);border-radius:12px;background:#fff;margin-bottom:.5rem}
.range-row label{font-weight:600;font-size:.88rem;color:#334155;margin:0}
.range-input{width:100%;accent-color:var(--brand);height:22px}
.range-value{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;color:var(--brand);min-width:56px;text-align:center;background:#eef2ff;padding:3px 8px;border-radius:8px;font-size:.85rem}

/* Toggles/checkboxes */
.chk-row{display:flex;align-items:center;gap:.6rem;padding:.7rem 1rem;border:1.5px solid var(--line);border-radius:12px;background:#fff;margin-bottom:.5rem;cursor:pointer;transition:all .12s}
.chk-row:hover{border-color:#c7d2fe;background:#f8faff}
.chk-row.checked{border-color:var(--brand);background:#eef2ff}
.chk-row input{accent-color:var(--brand);margin:0}

/* Images */
.img-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(130px,1fr));gap:.7rem;margin:.6rem 0 1rem}
.img-card{position:relative;border-radius:14px;overflow:hidden;cursor:pointer;border:2.5px solid transparent;background:#fff;transition:all .18s;box-shadow:0 4px 12px -6px rgba(16,24,40,.22)}
.img-card .ph{height:110px;display:grid;place-items:center;font-size:2.2rem;background:linear-gradient(135deg,#eef2ff,#ecfeff)}
.img-card img{width:100%;height:110px;object-fit:cover;display:block}
.img-card:hover{transform:translateY(-2px)}
.img-card.selected{border-color:var(--brand);box-shadow:0 10px 24px -10px rgba(91,94,240,.7)}
.img-card .label{padding:.4rem .5rem;font-size:.75rem;font-weight:600;text-align:center;background:#fff}
.img-card .check{position:absolute;top:6px;right:6px;width:22px;height:22px;border-radius:50%;background:var(--brand);color:#fff;display:none;place-items:center;font-size:.72rem}
.img-card.selected .check{display:grid}

/* Tirage */
.tirage-box{border:2px dashed #c7d2fe;border-radius:16px;padding:1.5rem;text-align:center;background:linear-gradient(135deg,#f8faff,#eef2ff);margin:1rem 0}
.tirage-result{display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center;margin-top:1rem;min-height:44px}
.tirage-card{background:#fff;border:1px solid var(--line);border-radius:12px;padding:.7rem 1rem;font-weight:600;font-size:.85rem;box-shadow:0 4px 12px -8px rgba(16,24,40,.28);text-align:left;animation:popIn .3s ease;max-width:280px}
.tirage-card small{display:block;font-weight:500;color:var(--muted);margin-top:.2rem;font-size:.78rem}
@keyframes popIn{from{opacity:0;transform:scale(.9)}to{opacity:1;transform:scale(1)}}
.btn-tirage{background:linear-gradient(135deg,var(--amber),#f97316);color:#fff;border:0;font-weight:700;border-radius:12px;padding:.75rem 1.5rem;box-shadow:0 10px 24px -10px rgba(245,158,11,.8);transition:all .15s}
.btn-tirage:hover{color:#fff;filter:brightness(1.06);transform:translateY(-1px)}

/* Actions */
.slide-actions{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-top:2rem;padding-top:1.5rem;border-top:1px dashed var(--line);flex-wrap:wrap}
.slide-actions.right{justify-content:flex-end}
.btn-brand{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#fff;border:0;font-weight:700;border-radius:12px;padding:.75rem 1.35rem;box-shadow:0 10px 24px -12px rgba(91,94,240,.9);transition:all .15s;display:inline-flex;align-items:center;gap:.4rem}
.btn-brand:hover{color:#fff;filter:brightness(1.08);transform:translateY(-1px)}
.btn-brand:disabled{opacity:.55;cursor:not-allowed;transform:none}
.btn-cyan-soft{background:#ecfeff;color:#0e7490;border:1px solid #cffafe;font-weight:600;border-radius:12px;padding:.55rem 1rem;font-size:.85rem;transition:all .15s}
.btn-cyan-soft:hover{background:#cffafe}
.btn-success-soft{background:#ecfdf5;color:#047857;border:1px solid #d1fae5;font-weight:600;border-radius:12px;padding:.65rem 1.1rem;transition:all .15s}
.btn-danger-soft{background:#fff1f2;color:#be123c;border:1px solid #ffe4e6;font-weight:600;border-radius:12px;padding:.65rem 1rem;transition:all .15s}
.btn-gold{background:linear-gradient(135deg,#d4a51f,#b8860b);color:#fff;border:0;font-weight:700;border-radius:12px;padding:.7rem 1.15rem;transition:all .15s;box-shadow:0 10px 24px -12px rgba(212,165,31,.7)}
.btn-gold:hover{color:#fff;filter:brightness(1.08);transform:translateY(-1px)}

/* Keys panel */
.keys-panel{border:1px solid #dde5f3;border-radius:14px;padding:1.1rem;background:#f8fafc}
.keys-panel textarea{background:#fff;font-family:ui-monospace,monospace;font-size:.82rem;line-height:1.55}

/* Preview / facts */
.preview{border:1px solid #c7d2fe;background:linear-gradient(135deg,#f8faff,#eef2ff);border-radius:14px;padding:.9rem 1.1rem;margin-top:1.1rem;font-size:.88rem}
.preview b{color:#3730a3}
.preview .chips{display:flex;flex-wrap:wrap;gap:.4rem;margin-top:.5rem}
.preview .chip{background:#fff;border:1px solid #e0e7ff;border-radius:999px;padding:.22rem .7rem;font-weight:600;font-size:.76rem;color:#3730a3}
.preview.bad{border-color:#fecdd3;background:#fff1f2;color:#be123c}

/* Progress wizard */
.wiz-progress{display:flex;align-items:center;gap:.5rem;margin-bottom:1.2rem;flex-wrap:wrap}
.wiz-progress-bar{flex:1;min-width:120px;height:6px;border-radius:999px;background:#e8eefb;overflow:hidden}
.wiz-progress-bar .fill{height:100%;border-radius:999px;background:linear-gradient(90deg,var(--brand),var(--cyan));transition:width .4s}
.wiz-progress-label{font-size:.78rem;color:var(--muted);font-weight:600;white-space:nowrap}
.wiz-fact{background:linear-gradient(135deg,#ecfdf5,#f0fdf4);border:1px solid #bbf7d0;border-radius:12px;padding:.8rem 1rem;font-size:.86rem;color:#065f46;margin-top:1rem;display:flex;align-items:flex-start;gap:.5rem}
.wiz-fact .ico{font-size:1.1rem;flex:0 0 auto}

/* Review grid */
.review-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:.7rem;margin:1rem 0 1.5rem}
.review-item{background:#f8fafc;border:1px solid var(--line);border-radius:12px;padding:.75rem .9rem}
.review-label{font-size:.72rem;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:.06em}
.review-value{font-size:.92rem;font-weight:600;word-break:break-word;margin-top:.2rem}

/* Science select */
.sci-select-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:.6rem;margin:1rem 0}
.sci-select{display:flex;align-items:center;gap:.65rem;border:1.5px solid var(--line);border-radius:12px;padding:.65rem .85rem;background:#fff;cursor:pointer;transition:all .12s;font-size:.88rem}
.sci-select:hover{border-color:#c7d2fe;background:#f8faff}
.sci-select.on{border-color:var(--brand);background:#eef2ff}
.sci-select input{accent-color:var(--brand);margin:0}
.sci-select .ic{width:30px;height:30px;border-radius:9px;display:grid;place-items:center;color:#fff;font-size:.9rem;flex:0 0 auto}
.sci-select .meta{min-width:0;flex:1}
.sci-select .nm{font-weight:700;font-size:.85rem;line-height:1.2;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.sci-select .cat{font-size:.65rem;text-transform:uppercase;letter-spacing:.06em;color:var(--muted);font-weight:700}
.sci-cat-header{grid-column:1/-1;font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;font-size:.88rem;color:#3730a3;margin:.75rem 0 .1rem;padding-bottom:.3rem;border-bottom:1px solid #e0e7ff;display:flex;align-items:center;gap:.5rem}
.sci-cat-header .count{font-size:.72rem;color:var(--muted);font-weight:500}
.sel-toolbar{display:flex;gap:.5rem;flex-wrap:wrap;align-items:center;background:linear-gradient(135deg,#eef2ff,#f8faff);border:1.5px solid #c7d2fe;border-radius:14px;padding:.7rem 1rem;margin-bottom:1rem}
.sel-toolbar .big{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#fff;border:0;font-weight:700;border-radius:10px;padding:.55rem 1.1rem;font-size:.9rem;box-shadow:0 6px 16px -6px rgba(91,94,240,.7);transition:all .15s}
.sel-toolbar .big:hover{color:#fff;filter:brightness(1.08);transform:translateY(-1px)}

/* Analyzing */
#view-analyzing{padding:40px 16px}
.analyzing-wrap{max-width:900px;margin:0 auto;background:#fff;border:1px solid var(--line);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:32px 36px}
.analyzing-head{display:flex;align-items:center;gap:1rem;margin-bottom:1.5rem}
.spinner-brand{width:44px;height:44px;border-radius:50%;background:conic-gradient(from 0deg,var(--brand),var(--cyan),var(--brand2),var(--brand));-webkit-mask:radial-gradient(farthest-side,transparent calc(100% - 7px),#000 0);mask:radial-gradient(farthest-side,transparent calc(100% - 7px),#000 0);animation:spin 1s linear infinite;flex:0 0 auto}
.spinner-brand.sm{width:22px;height:22px}
@keyframes spin{to{transform:rotate(360deg)}}
.progress-outer{height:10px;border-radius:999px;background:#e8eefb;overflow:hidden;margin-bottom:1.5rem}
.progress-inner{height:100%;width:0;border-radius:999px;background:linear-gradient(90deg,var(--brand),var(--cyan));transition:width .5s}
.agent-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:.75rem}
.agent-tile{display:flex;align-items:center;gap:.65rem;padding:.75rem .85rem;border-radius:14px;border:1px solid var(--line);background:#fff;transition:all .25s}
.agent-tile.run{border-color:#fde68a;background:#fffdf5}
.agent-tile.done{border-color:#bbf7d0;background:#f6fffa}
.agent-tile.err{border-color:#fecdd3;background:#fff1f2}
.agent-ic{width:34px;height:34px;border-radius:10px;display:grid;place-items:center;color:#fff;background:var(--c,var(--brand));flex:0 0 auto;font-size:.9rem}
.agent-meta{min-width:0;flex:1}
.agent-name{font-size:.82rem;font-weight:700;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.agent-status{font-size:.72rem;color:var(--muted)}
.agent-dot{width:9px;height:9px;border-radius:50%;background:#cbd5e1;flex:0 0 auto}
.agent-tile.run .agent-dot{background:var(--amber);animation:pulse 1.1s infinite}
.agent-tile.done .agent-dot{background:var(--green)}
.agent-tile.err .agent-dot{background:var(--rose)}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.45;transform:scale(.8)}}
.log{font-family:ui-monospace,Menlo,monospace;font-size:.76rem;color:#475569;background:#f8fafc;border:1px solid var(--line);border-radius:12px;padding:.75rem .9rem;max-height:160px;overflow:auto;margin-top:1.2rem}
.log .t{color:#94a3b8;margin-right:.5rem}

/* ========= REPORT ========= */
#view-report{padding:20px 16px 64px}
.report-wrap{max-width:1320px;margin:0 auto}

.report-hero{background:linear-gradient(135deg,#1a1a3e 0%,#2d2b5c 40%,#0e6a8c 100%);color:#fff;border-radius:var(--radius-lg);padding:32px 36px;margin-bottom:16px;position:relative;overflow:hidden;box-shadow:var(--shadow-lg)}
.report-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 15% 20%,rgba(255,255,255,.1),transparent 45%),radial-gradient(circle at 85% 80%,rgba(6,182,212,.2),transparent 55%);pointer-events:none}
.report-hero h1{font-family:Georgia,'Times New Roman',serif;font-size:clamp(1.7rem,3.5vw,2.5rem);font-weight:600;line-height:1.1;margin-bottom:.3rem;position:relative}
.report-hero .subtitle{font-family:Georgia,'Times New Roman',serif;font-style:italic;font-size:1rem;opacity:.85;position:relative;margin-bottom:1rem}
.report-hero .meta{display:flex;flex-wrap:wrap;gap:.4rem;margin-bottom:1rem;position:relative}
.meta-pill{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);color:#fff;padding:.3rem .75rem;border-radius:999px;font-size:.74rem;font-weight:600}
.lifeline{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.18);border-radius:14px;padding:.85rem 1rem;position:relative}
.lifeline .row{display:flex;align-items:center;gap:1.2rem;flex-wrap:wrap}
.lifeline .stat .v{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;font-size:1.25rem;line-height:1}
.lifeline .stat .l{font-size:.65rem;text-transform:uppercase;letter-spacing:.08em;opacity:.75;margin-top:.2rem;font-weight:700}
.lifeline .bar{flex:1;min-width:160px;height:8px;border-radius:999px;background:rgba(255,255,255,.15);overflow:hidden}
.lifeline .bar .fill{height:100%;background:linear-gradient(90deg,#f5c542,#f59e0b)}

/* Toolbar */
.report-toolbar{background:#fff;border:1px solid var(--line);border-radius:16px;padding:.75rem 1rem;margin-bottom:14px;box-shadow:var(--shadow);display:flex;align-items:center;gap:.5rem;flex-wrap:wrap;position:sticky;top:64px;z-index:40}
.nav-btn{border:1px solid var(--line);background:#fff;border-radius:10px;padding:.5rem .85rem;font-weight:600;color:var(--ink);font-size:.85rem;transition:all .15s;display:inline-flex;align-items:center;gap:.35rem;cursor:pointer;white-space:nowrap}
.nav-btn:hover{background:#f8fafc;transform:translateY(-1px)}
.nav-btn.primary{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#fff;border:0;box-shadow:0 6px 16px -6px rgba(91,94,240,.6)}
.nav-btn.primary:hover{color:#fff;filter:brightness(1.08)}
.nav-btn.success{background:linear-gradient(135deg,#10b981,#059669);color:#fff;border:0;box-shadow:0 6px 16px -6px rgba(16,185,129,.5)}
.nav-btn.success:hover{color:#fff;filter:brightness(1.08)}
.nav-btn.small{padding:.4rem .7rem;font-size:.8rem}
.date-input{border:1px solid var(--line);border-radius:10px;padding:.44rem .7rem;font-weight:600;font-family:inherit;font-size:.85rem;color:var(--ink);background:#fff}
.period-pills{display:flex;gap:.1rem;background:#f1f4fb;padding:.22rem;border-radius:10px;flex-wrap:wrap}
.period-pill{border:0;background:transparent;padding:.4rem .7rem;border-radius:7px;font-weight:600;font-size:.78rem;color:var(--muted);position:relative;cursor:pointer;transition:all .12s;white-space:nowrap}
.period-pill:hover{background:#e8eefb;color:var(--ink)}
.period-pill.active{background:#fff;color:var(--ink);box-shadow:0 2px 6px -2px rgba(0,0,0,.12)}
.period-pill .dot{position:absolute;top:2px;right:3px;width:5px;height:5px;border-radius:50%;background:var(--green)}

/* Report main grid: calendar left, content right */
.report-layout{display:grid;grid-template-columns:320px 1fr;gap:16px;align-items:start}
@media(max-width:900px){.report-layout{grid-template-columns:1fr}}
.report-sidebar{position:sticky;top:130px}
.report-main{min-width:0}

/* Calendar card */
.calendar-card{background:#fff;border:1px solid var(--line);border-radius:16px;padding:16px;box-shadow:var(--shadow)}
.calendar-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:.75rem}
.calendar-title{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;font-size:.95rem;text-transform:capitalize}
.cal-nav-btns{display:flex;gap:.25rem}
.cal-nav-btns button{border:1px solid var(--line);background:#fff;border-radius:8px;width:28px;height:28px;display:grid;place-items:center;color:var(--muted);font-size:.8rem;cursor:pointer;transition:all .12s}
.cal-nav-btns button:hover{background:#f8fafc;color:var(--ink)}
.calendar-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:3px}
.cal-dow{font-size:.62rem;text-align:center;color:var(--muted);font-weight:700;padding:.25rem 0;text-transform:uppercase;letter-spacing:.05em}
.cal-day{aspect-ratio:1;border-radius:8px;display:grid;place-items:center;font-size:.78rem;font-weight:600;cursor:pointer;position:relative;border:1.5px solid transparent;background:#f8fafc;color:#334155;transition:all .12s;line-height:1}
.cal-day:hover{transform:scale(1.12);box-shadow:0 4px 10px -4px rgba(0,0,0,.18);z-index:2}
.cal-day.other{opacity:.25;cursor:default;pointer-events:none}
.cal-day.today{border-color:var(--brand);border-width:2px;font-weight:800}
.cal-day.sel{border-color:var(--gold);box-shadow:0 0 0 2px rgba(212,165,31,.35)}
.cal-day.score-high{background:#d1fae5;color:#065f46}
.cal-day.score-med{background:#fef3c7;color:#92400e}
.cal-day.score-low{background:#fee2e2;color:#991b1b}
.cal-day.score-neutral{background:#f1f5f9;color:#475569}
.cal-day .em{font-size:.58rem;line-height:1;position:absolute;top:0px;right:1px}
.cal-day .dot{position:absolute;bottom:1px;left:50%;transform:translateX(-50%);width:3px;height:3px;border-radius:50%;background:var(--green)}
.calendar-legend{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-top:.85rem;font-size:.68rem;color:var(--muted)}
.calendar-legend span{display:inline-flex;align-items:center;gap:.22rem}
.calendar-legend .sw{width:11px;height:11px;border-radius:3px;display:inline-block}
.calendar-analyze{margin-top:.85rem;width:100%}
.calendar-hint{font-size:.75rem;color:var(--muted);text-align:center;margin-top:.5rem;line-height:1.4}

/* Validation card */
.score-card{background:#fff;border:1px solid var(--line);border-radius:16px;padding:20px 22px;margin-bottom:16px;box-shadow:var(--shadow)}
.score-card h3{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-size:1.05rem;margin:0 0 .9rem 0;display:flex;align-items:center;gap:.5rem;flex-wrap:wrap}
.score-summary{display:flex;align-items:center;gap:1.2rem;margin-bottom:1rem;padding:.9rem 1.1rem;background:linear-gradient(135deg,#f8fafc,#f1f5f9);border-radius:12px;flex-wrap:wrap}
.score-big{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-size:2.2rem;font-weight:800;line-height:1}
.score-big.high{color:#047857}
.score-big.med{color:#b45309}
.score-big.low{color:#be123c}.score-big:not(.high):not(.med):not(.low){color:#64748b}
.score-verdict{font-size:.9rem;font-weight:600;flex:1;min-width:160px}
.score-verdict .badge{display:inline-block;padding:.22rem .65rem;border-radius:999px;font-size:.68rem;margin-left:.5rem;text-transform:uppercase;letter-spacing:.04em;font-weight:700}
.score-verdict .badge.high{background:#d1fae5;color:#065f46}
.score-verdict .badge.med{background:#fef3c7;color:#92400e}
.score-verdict .badge.low{background:#fee2e2;color:#991b1b}
.score-table{width:100%;border-collapse:collapse;font-size:.85rem}
.score-table th{text-align:left;font-size:.68rem;text-transform:uppercase;letter-spacing:.06em;color:var(--muted);font-weight:700;padding:.5rem .4rem;border-bottom:1px solid var(--line);white-space:nowrap}
.score-table td{padding:.55rem .4rem;border-bottom:1px solid #f1f4fb;vertical-align:middle}
.score-table tbody tr{cursor:pointer;transition:background .12s}
.score-table tbody tr:hover{background:#f8fafc}
.score-table .nm{display:flex;align-items:center;gap:.5rem;font-weight:600;font-size:.84rem}
.score-table .nm .ic{width:22px;height:22px;border-radius:6px;display:grid;place-items:center;color:#fff;font-size:.7rem;flex:0 0 auto}
.score-table .bar-cell{width:100px}
.score-bar{height:8px;background:#e5e7eb;border-radius:999px;overflow:hidden}
.score-bar .fill{height:100%;border-radius:999px;transition:width .3s}
.score-bar .fill.high{background:linear-gradient(90deg,#10b981,#059669)}
.score-bar .fill.med{background:linear-gradient(90deg,#f59e0b,#d97706)}
.score-bar .fill.low{background:linear-gradient(90deg,#f43f5e,#be123c)}
.score-table .num{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;min-width:34px;text-align:right;font-size:.9rem}
.score-table .headline{color:var(--muted);font-size:.78rem;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:280px}
@media(max-width:600px){.score-table .headline{display:none}.score-table .bar-cell{width:70px}}

/* Synthesis */
.synthesis-card{background:linear-gradient(135deg,#f8faff,#eef2ff);border:1px solid #c7d2fe;border-radius:16px;padding:22px 24px;margin-bottom:16px;position:relative;overflow:hidden}
.synthesis-card::before{content:"";position:absolute;top:0;left:0;width:5px;height:100%;background:linear-gradient(180deg,var(--brand),var(--cyan))}
.synthesis-card h2{font-family:Georgia,'Times New Roman',serif;font-size:1.3rem;font-weight:600;color:#1e1b4b;margin-bottom:.5rem;display:flex;align-items:center;gap:.5rem;flex-wrap:wrap}
.synthesis-card .fil{font-family:Georgia,'Times New Roman',serif;font-size:1.05rem;font-style:italic;color:#1e293b;margin-bottom:.85rem;line-height:1.5}
.synthesis-card .themes{display:flex;flex-wrap:wrap;gap:.35rem;margin-bottom:.85rem}
.synthesis-card .theme-chip{background:#fff;border:1px solid #e0e7ff;border-radius:999px;padding:.24rem .7rem;font-size:.76rem;font-weight:600;color:#3730a3}
.synthesis-card .plan{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:.65rem}
.synthesis-card .plan-item{background:#fff;border:1px solid #e0e7ff;border-radius:12px;padding:.7rem .85rem}
.synthesis-card .plan-item .k{font-size:.68rem;text-transform:uppercase;letter-spacing:.06em;font-weight:700;color:#64748b;margin-bottom:.3rem}
.synthesis-card .plan-item ul{margin:0;padding-left:1.1rem;font-size:.84rem}
.synthesis-card .mantra{margin-top:.9rem;text-align:center;font-family:Georgia,'Times New Roman',serif;font-size:1.1rem;font-style:italic;color:#4338ca}
.synthesis-card.grand{background:linear-gradient(135deg,#fef3c7,#fffbeb);border-color:#fde68a}
.synthesis-card.grand::before{background:linear-gradient(180deg,var(--gold),#f59e0b)}
.synthesis-card.grand h2{color:#78350f}
.synthesis-card.grand .fil{color:#78350f}
.synthesis-card.grand .theme-chip{background:#fff;border-color:#fde68a;color:#78350f}
.synthesis-card.grand .plan-item{border-color:#fde68a}
.synthesis-card.grand .mantra{color:#92400e}
.synthesis-card.pending{background:#f8fafc;border-color:#dde5f3;text-align:center;padding:24px}
.synthesis-card.pending h2{justify-content:center;color:#64748b;font-size:1.1rem;margin-bottom:.5rem}
.badge-ai{font-size:.6rem;font-weight:700;background:#fff;border:1px solid #e0e7ff;border-radius:999px;padding:.15rem .5rem;color:#3730a3;margin-left:auto;text-transform:uppercase;letter-spacing:.06em}
.synthesis-card.fallback{background:linear-gradient(135deg,#fef3c7,#fffbeb);border-color:#fde68a}


/* Rapport transversal approfondi */
.grand-report{background:#fff;border:1px solid #d9deea;border-radius:20px;padding:clamp(18px,3vw,30px);margin-bottom:18px;box-shadow:var(--shadow)}
.grand-report .gr-head{display:flex;gap:14px;align-items:flex-start;margin-bottom:18px}
.grand-report .gr-icon{width:46px;height:46px;border-radius:14px;background:#172554;color:#fff;display:grid;place-items:center;font-size:1.25rem;flex:0 0 auto}
.grand-report h2{font:600 clamp(1.35rem,2.5vw,1.8rem)/1.2 Georgia,serif;margin:0 0 5px;color:#172554}
.grand-report .gr-kicker{font-size:.72rem;text-transform:uppercase;letter-spacing:.1em;color:#64748b;font-weight:800}
.grand-report .gr-lead{font:1.05rem/1.7 Georgia,serif;color:#26324b;margin:0 0 18px}
.grand-report .gr-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
.grand-report .gr-section{border:1px solid #e5e9f1;border-radius:14px;padding:14px 16px;background:#fbfcfe;min-width:0}
.grand-report .gr-section.wide{grid-column:1/-1}
.grand-report .gr-section h3{font-size:.9rem;font-weight:800;color:#24324b;margin:0 0 7px}
.grand-report .gr-section p,.grand-report .gr-section li{font-size:.86rem;line-height:1.65;color:#475569}
.grand-report .gr-section p:last-child{margin-bottom:0}
.grand-report ul{padding-left:1.15rem;margin:0}
.grand-report .gr-note{font-size:.78rem;color:#64748b;border-top:1px solid #e5e9f1;padding-top:12px;margin-top:16px}
.grand-report .gr-plan{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:10px;margin-top:12px}
.grand-report .gr-plan>div{background:#f1f5f9;border-radius:12px;padding:12px}
.grand-report .gr-plan b{display:block;font-size:.7rem;text-transform:uppercase;letter-spacing:.07em;color:#475569;margin-bottom:6px}
.grand-report .gr-plan p{font-size:.82rem;line-height:1.5;margin:0;color:#334155}
.grand-report .gr-foot{display:flex;align-items:center;gap:8px;flex-wrap:wrap;margin-top:14px}
.grand-report .gr-scope{font-size:.74rem;color:#64748b}
@media(max-width:680px){.grand-report .gr-grid{grid-template-columns:1fr}.grand-report .gr-section.wide{grid-column:auto}.grand-report .gr-plan{grid-template-columns:1fr}}
.detail-expert{display:grid;gap:10px;margin-top:14px}
.detail-expert .de-block{border:1px solid var(--line);border-radius:12px;padding:13px 15px;background:#fbfcfe}
.detail-expert .de-block h5{font-size:.82rem;font-weight:800;color:#334155;margin:0 0 6px}
.detail-expert .de-block p,.detail-expert .de-block li{font-size:.86rem;line-height:1.65;color:#475569}
.detail-expert .de-block ul{margin:0;padding-left:1.1rem}

/* Science grid */
.sci-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:12px}
.sci-card{background:#fff;border:1px solid var(--line);border-radius:16px;padding:16px 16px 14px;cursor:pointer;transition:all .18s;position:relative;overflow:hidden;display:flex;flex-direction:column;min-height:190px}
.sci-card:hover{transform:translateY(-2px);box-shadow:0 12px 24px -14px rgba(16,24,40,.3);border-color:#c7d2fe}
.sci-card.err{border-color:#fecdd3;background:#fff9fa}
.sci-card .top{display:flex;align-items:center;gap:.55rem;margin-bottom:.4rem}
.sci-card .ic{width:34px;height:34px;border-radius:10px;display:grid;place-items:center;color:#fff;flex:0 0 auto;font-size:.95rem}
.sci-card .nm{font-weight:700;font-size:.9rem;line-height:1.2}
.sci-card .cat{font-size:.65rem;text-transform:uppercase;letter-spacing:.06em;color:var(--muted);font-weight:700}
.sci-card .headline{font-family:Georgia,'Times New Roman',serif;font-size:1rem;font-weight:600;color:#1e293b;margin:.35rem 0 .25rem;line-height:1.3}
.sci-card .snippet{font-size:.82rem;color:var(--muted);line-height:1.45;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;flex:1}
.sci-card .go{margin-top:.6rem;font-size:.78rem;font-weight:700;color:var(--brand);display:flex;align-items:center;gap:.3rem}
.sci-card .status{position:absolute;top:10px;right:10px;font-size:.6rem;font-weight:700;padding:.12rem .4rem;border-radius:5px;background:#eef2ff;color:#3730a3}
.sci-card.err .status{background:#fff1f2;color:#be123c}
.sci-card .err-msg{font-size:.82rem;color:#be123c;margin-top:.35rem;line-height:1.35}
/* Retro */
.retro-card{background:#fff;border:1px solid var(--line);border-radius:16px;padding:0;margin-bottom:16px;overflow:hidden;box-shadow:var(--shadow)}
.retro-head{background:linear-gradient(135deg,#ecfdf5,#f0fdf4);padding:14px 20px;font-weight:700;display:flex;align-items:center;gap:.5rem;cursor:pointer;user-select:none;border-bottom:1px solid #d1fae5}
.retro-head .chevron{margin-left:auto;transition:transform .2s;font-size:.85rem;color:#047857}
.retro-head.open .chevron{transform:rotate(180deg)}
.retro-body{padding:16px 20px;border-top:1px solid var(--line)}
.retro-form{display:grid;gap:.7rem}
.retro-form label{font-size:.85rem;font-weight:600;color:#334155}
.retro-form textarea{min-height:80px;resize:vertical}
.retro-row{display:grid;grid-template-columns:1fr auto;gap:.6rem;align-items:end}
@media(max-width:600px){.retro-row{grid-template-columns:1fr}}
.verdict-table{width:100%;border-collapse:collapse;font-size:.82rem;margin-top:.75rem}
.verdict-table th{text-align:left;font-size:.68rem;text-transform:uppercase;color:var(--muted);padding:.4rem;border-bottom:1px solid var(--line);font-weight:700;letter-spacing:.05em}
.verdict-table td{padding:.55rem .4rem;border-bottom:1px solid #f1f4fb;vertical-align:top}
.verdict-badge{display:inline-block;padding:.15rem .5rem;border-radius:999px;font-size:.65rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;white-space:nowrap}
.verdict-badge.juste{background:#d1fae5;color:#065f46}
.verdict-badge.faux{background:#fee2e2;color:#991b1b}
.verdict-badge.partiel{background:#fef3c7;color:#92400e}.verdict-badge.non-verifiable{background:#f1f5f9;color:#475569}
.retro-summary{background:#ecfdf5;border:1px solid #d1fae5;border-radius:12px;padding:.85rem 1.1rem;margin-top:.85rem;font-size:.88rem;color:#065f46}
.retro-summary.bad{background:#fef2f2;border-color:#fecaca;color:#991b1b}

/* Help */
.help-card{background:linear-gradient(135deg,#fef3c7,#fffbeb);border:1px solid #fde68a;border-radius:14px;padding:.85rem 1.1rem;font-size:.85rem;color:#78350f;margin-bottom:14px;display:flex;gap:.6rem;align-items:flex-start}
.help-card b{color:#92400e}
.help-card kbd{background:#fff;border:1px solid #fde68a;border-radius:5px;padding:1px 6px;font-size:.75rem;font-weight:700;box-shadow:0 1px 0 #fde68a}

/* Footer */
.report-footer{margin-top:20px;background:#fff;border:1px solid var(--line);border-radius:16px;padding:20px 24px;box-shadow:var(--shadow)}
.report-footer h3{font-size:1rem;margin-bottom:.5rem}

/* Modal */
.modal-content{border-radius:20px;border:1px solid var(--line)}
.modal-header{border-bottom:1px solid var(--line);padding:1rem 1.3rem}
.modal-title{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;font-weight:700;font-size:1.1rem;display:flex;align-items:center;gap:.5rem}
.modal-body{padding:1.3rem}
#detailModal .sci-intro{font-size:.9rem;line-height:1.65;color:#334155;margin-bottom:1rem}
#detailModal .sci-intro p{margin-bottom:.7rem}
#detailModal .principles{background:#f8fafc;border:1px solid var(--line);border-radius:12px;padding:.8rem 1rem;margin-bottom:1rem}
#detailModal .principles ul{margin:0;padding-left:1.1rem;font-size:.85rem;color:#475569}
#detailModal .facts-box{background:#eef2ff;border:1px solid #e0e7ff;border-radius:12px;padding:.85rem 1rem;margin-bottom:1rem}
#detailModal .facts-box .ttl{font-size:.68rem;text-transform:uppercase;letter-spacing:.06em;font-weight:700;color:#3730a3;margin-bottom:.4rem}
#detailModal .facts-box ul{margin:0;padding-left:1.1rem;font-size:.85rem;color:#1e293b;font-family:ui-monospace,monospace}
#detailModal .period-tabs{display:flex;gap:.3rem;flex-wrap:wrap;background:#f1f4fb;padding:.3rem;border-radius:12px;width:fit-content;margin-bottom:1rem}
#detailModal .ptab{border:0;background:transparent;padding:.45rem .9rem;border-radius:8px;font-weight:600;color:var(--muted);font-size:.82rem;position:relative;cursor:pointer;transition:all .12s}
#detailModal .ptab:hover{color:var(--ink)}
#detailModal .ptab.active{background:#fff;color:var(--ink);box-shadow:0 2px 6px -4px rgba(0,0,0,.15)}
#detailModal .ptab .gen-dot{position:absolute;top:2px;right:4px;width:5px;height:5px;border-radius:50%;background:var(--green)}
#detailModal .period-body h4{font-family:Georgia,'Times New Roman',serif;font-size:1.25rem;color:#3730a3;margin-bottom:.5rem}
#detailModal .period-body .lecture{font-size:.92rem;line-height:1.7;color:#1e293b}
#detailModal .period-body .lecture p{margin-bottom:.65rem}
#detailModal .actions-box{margin-top:.85rem;background:#ecfdf5;border:1px solid #d1fae5;border-radius:12px;padding:.85rem 1rem}
#detailModal .actions-box .ttl{font-size:.68rem;text-transform:uppercase;letter-spacing:.06em;font-weight:700;color:#047857;margin-bottom:.35rem}
#detailModal .actions-box ul{margin:0;padding-left:1.1rem;font-size:.88rem}
#detailModal .err-box{background:#fff1f2;border:1px solid #fecdd3;border-radius:12px;padding:.9rem 1.1rem;color:#9f1239;font-size:.9rem}
#detailModal .err-box .ttl{font-weight:700;margin-bottom:.35rem}

/* Toast */
.toast-wrap{position:fixed;bottom:18px;left:50%;transform:translateX(-50%);z-index:9999;display:flex;flex-direction:column;gap:.5rem;align-items:center;pointer-events:none}
.toast{background:var(--ink);color:#fff;padding:.72rem 1.1rem;border-radius:12px;font-size:.85rem;font-weight:600;box-shadow:0 16px 40px -16px rgba(11,16,32,.7);animation:swapIn .3s;max-width:92vw}
.toast.ok{background:linear-gradient(135deg,#059669,#10b981)}
.toast.warn{background:linear-gradient(135deg,#b45309,#f59e0b)}
.toast.err{background:linear-gradient(135deg,#be123c,#f43f5e)}
@keyframes swapIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:none}}
.swap-in{animation:swapIn .4s cubic-bezier(.2,.8,.2,1)}

/* Boot fallback */
#bootFallback{padding:80px 20px;text-align:center}
#bootFallback .big{font-size:3rem;margin-bottom:1rem}

/* Mobile */
@media(max-width:768px){
  .report-hero{padding:24px 20px}
  .sci-grid{grid-template-columns:1fr}
  .report-toolbar{position:static}
  .report-sidebar{position:static}
}

/* Direction artistique : dossier éditorial clair, hiérarchie typographique et contraste mesuré */
#view-report{background:linear-gradient(180deg,#f7f7f4 0%,#f2f4f7 100%)}
.report-wrap{max-width:1380px}
.report-hero{background:linear-gradient(115deg,#111827 0%,#1e293b 58%,#164e63 100%);border:1px solid rgba(255,255,255,.12);border-radius:22px;padding:clamp(24px,4vw,42px);box-shadow:0 18px 48px -28px rgba(15,23,42,.55)}
.report-hero::after{content:"";position:absolute;left:36px;bottom:0;width:110px;height:3px;background:linear-gradient(90deg,#d6b56d,transparent)}
.report-hero h1{font-size:clamp(1.8rem,4vw,2.8rem);letter-spacing:-.035em}
.report-hero .subtitle{font:italic 1rem/1.6 Georgia,serif;max-width:760px}
.report-toolbar,.calendar-card,.sci-card,.report-footer,.retro-card{box-shadow:0 8px 28px -22px rgba(15,23,42,.32);border-color:#e2e6ec}
.report-toolbar{border-radius:14px;backdrop-filter:blur(10px)}
.synthesis-card{background:#fff;border-color:#e1e7ef;box-shadow:0 8px 28px -22px rgba(15,23,42,.3);padding:clamp(18px,2.6vw,28px)}
.synthesis-card::before{background:#0f766e}
.synthesis-card h2{font-size:1.35rem;color:#172554}
.synthesis-card .fil{font:1.04rem/1.75 Georgia,serif;font-style:normal;color:#334155}
.synthesis-card .theme-chip{background:#f8fafc;border-color:#e2e8f0;color:#334155}
.synthesis-card .plan-item{border-color:#e5eaf0;background:#fbfcfd}
.synthesis-card.grand{background:#fff;border-color:#d9e1e8}
.synthesis-card.grand::before{background:#b08b45}
.synthesis-card.grand h2,.synthesis-card.grand .fil{color:#1e293b}
.synthesis-card.grand .theme-chip{border-color:#eadfca;color:#72551e}
.synthesis-card.grand .plan-item{border-color:#eadfca}
.sci-card{border-radius:16px}
.sci-card:hover{border-color:#94a3b8;box-shadow:0 14px 28px -20px rgba(15,23,42,.4)}
#detailModal .modal-content{border:1px solid #e2e8f0;border-radius:18px;overflow:hidden}
#detailModal .modal-header{background:#f8fafc;border-bottom:1px solid #e2e8f0}
#detailModal .modal-title{font:600 1.2rem Georgia,serif;color:#172554}
@media(prefers-reduced-motion:reduce){*,*::before,*::after{scroll-behavior:auto!important;animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}}

</style>
</head>
<body>
<div class="bg-orbs"></div>

<header class="topbar">
  <div class="topbar-inner">
    <a href="#" class="brand" onclick="return false"><span class="brand-mark"><i class="bi bi-stars"></i></span><span class="brand-name">Esother<em>IA</em></span></a>
    <div class="ms-auto d-flex align-items-center gap-2 flex-wrap">
      <span id="trialBadge" class="pill pill-amber"><i class="bi bi-hourglass-split"></i> <span id="trialText">Essai</span></span>
      <span id="modeBadge" class="pill pill-rose"><i class="bi bi-exclamation-circle"></i> Agnes</span>
      <button class="btn-ghost" id="btnKeysTab"><i class="bi bi-key"></i> Clés</button>
      <button class="btn-ghost" id="btnHome"><i class="bi bi-house"></i> Accueil</button>
      <button class="btn-ghost" id="btnNewQuestion"><i class="bi bi-question-circle"></i> Question</button>
      <button class="btn-ghost" id="btnReset"><i class="bi bi-arrow-counterclockwise"></i></button>
    </div>
  </div>
</header>

<div class="alert alert-danger m-3" id="bootError" hidden></div>
<noscript><div class="alert alert-warning m-3">JavaScript est nécessaire.</div></noscript>

<main>
  <section id="view-wizard">
    <div class="deck" id="deck">
      <!-- Boot fallback shown until renderSlides succeeds -->
      <div class="slide active" id="bootFallback">
        <div class="slide-inner" style="text-align:center;padding:60px 30px">
          <div class="big">✨</div>
          <h1 class="slide-title">Chargement en cours…</h1>
          <p class="slide-sub" style="margin:0 auto 1.5rem">EsotherIA prépare l'interface.</p>
          <div id="bootErrorDetail" style="display:none;background:#fff1f2;border:1px solid #fecdd3;border-radius:12px;padding:1rem;text-align:left;margin-top:1rem;font-family:ui-monospace,monospace;font-size:.8rem;color:#9f1239"></div>
          <div style="margin-top:1.5rem">
            <button class="btn-brand" onclick="location.reload()"><i class="bi bi-arrow-clockwise me-1"></i> Recharger</button>
            <button class="btn-ghost ms-2" onclick="localStorage.clear();location.reload()">Réinitialiser</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="view-analyzing" hidden>
    <div class="analyzing-wrap">
      <div class="analyzing-head">
        <div class="spinner-brand"></div>
        <div>
          <h2 class="h4 mb-1" id="analyzeTitle">Analyse en cours…</h2>
          <p class="text-muted mb-0" id="analyzeSub">Chaque science calcule puis rédige.</p>
        </div>
      </div>
      <div class="progress-outer"><div class="progress-inner" id="globalProgress"></div></div>
      <div class="agent-grid" id="agentGrid"></div>
      <div class="log" id="logBox"></div>
      <div class="mt-3 text-end"><button class="btn-ghost btn-sm" id="btnAbort">Arrêter et voir ce qui est prêt</button></div>
    </div>
  </section>

  <section id="view-report" hidden>
    <div class="report-wrap">
      <div class="report-hero" id="reportHero"></div>
      <div class="help-card">
        <i class="bi bi-lightbulb" style="font-size:1.1rem;flex:0 0 auto"></i>
        <div>
          <b>Comment utiliser :</b> cliquez un jour dans le calendrier ou utilisez <kbd>←</kbd><kbd>→</kbd> · choisissez les sciences (<b>Sliders</b>) · cliquez <b>Tout analyser</b> · cliquez une science pour le détail.
        </div>
      </div>
      <div class="report-toolbar" id="dateNav"></div>
      <div class="report-layout">
        <aside class="report-sidebar" id="calendarSlot"></aside>
        <div class="report-main">
          <div id="scoreTableSlot"></div>
          <div id="synthesisSlot"></div>
          <div id="retroSlot"></div>
          <div class="sci-grid" id="sciGrid"></div>
        </div>
      </div>
      <div class="report-footer">
        <h3><i class="bi bi-download me-1"></i> Emporter votre rapport</h3>
        <p class="text-muted mb-3" style="font-size:.88rem">Données conservées dans ce navigateur jusqu’à votre effacement manuel. Exportez régulièrement votre dossier JSON.</p>
        <div class="d-flex flex-wrap gap-2">
          <button class="btn-brand" id="btnDlReport"><i class="bi bi-file-earmark-arrow-down"></i> Télécharger (HTML)</button>
          <button class="btn-success-soft" id="btnDlDossier"><i class="bi bi-box-arrow-down"></i> Mon dossier</button>
          <label class="btn-ghost mb-0" style="cursor:pointer"><i class="bi bi-box-arrow-in-up"></i> Importer<input type="file" id="fImport" accept="application/json,.json" hidden></label>
          <button class="btn-danger-soft" id="btnWipe"><i class="bi bi-trash3"></i> Effacer</button>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="modal fade" id="detailModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
  <div class="modal-header"><h5 class="modal-title" id="dmTitle"></h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
  <div class="modal-body" id="dmBody"></div>
</div></div></div>

<div class="modal fade" id="newQModal" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><div class="modal-content">
  <div class="modal-header"><h5 class="modal-title"><i class="bi bi-question-circle me-2"></i>Nouvelle question</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
  <div class="modal-body">
    <p class="text-muted" style="font-size:.9rem">Vos données de profil sont conservées. Les tirages sont refaits.</p>
    <div class="mb-3"><label class="form-label">Nouvelle question</label><textarea class="form-control" id="nqQuestion" rows="2" maxlength="240"></textarea></div>
    <div class="mb-3"><label class="form-label">Situation actuelle</label><textarea class="form-control" id="nqSituation" rows="2" maxlength="300"></textarea></div>
    <div class="d-flex gap-2 justify-content-end">
      <button class="btn-ghost" data-bs-dismiss="modal">Annuler</button>
      <button class="btn-brand" id="btnConfirmNewQ"><i class="bi bi-arrow-repeat"></i> Relancer</button>
    </div>
  </div>
</div></div></div>

<div class="modal fade" id="sciSelectModal" tabindex="-1"><div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
  <div class="modal-header"><h5 class="modal-title"><i class="bi bi-sliders me-2"></i>Sélection des sciences</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
  <div class="modal-body" id="sciSelectBody"></div>
  <div class="modal-footer" style="border-top:1px solid var(--line);padding:.85rem 1.3rem;display:flex;justify-content:flex-end;gap:.5rem">
    <button class="btn-ghost" data-bs-dismiss="modal">Annuler</button>
    <button class="btn-brand" id="btnApplySci"><i class="bi bi-check2"></i> Appliquer</button>
  </div>
</div></div></div>

<div class="toast-wrap" id="toastWrap"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function(){
"use strict";
/* EsotherIA — refonte rapport expert/transversal v2.0 — 09/11/2026 */

/* ==================== SAFETY ==================== */
function showBootError(msg){
  const b=document.getElementById('bootError');if(b){b.hidden=false;b.textContent='Erreur : '+msg;}
  const d=document.getElementById('bootErrorDetail');
  if(d){d.style.display='block';d.textContent=msg;}
  console.error('[EsotherIA]',msg);
}
window.addEventListener('error',e=>showBootError(e.message||'inconnue'));
window.addEventListener('unhandledrejection',e=>showBootError((e.reason&&e.reason.message)||String(e.reason)));

/* ==================== CONSTANTS ==================== */
const AGNES_BASE='https://apihub.agnes-ai.com/v1';
const AGNES_MODEL='agnes-3.0-flash';
const AGNES_MODEL_FB='agnes-2.5-flash';
const LS={
  profile:'esotheria.v11.profile',picks:'esotheria.v11.picks',keys:'esotheria.v11.keys',
  cfg:'esotheria.v11.cfg',report:'esotheria.v11.report',reportAt:'esotheria.v11.reportAt',
  trial:'esotheria.v11.trial',sel:'esotheria.v11.sel'
};

const CITIES=[["Paris","France",48.8566,2.3522,"Europe/Paris"],["Lyon","France",45.764,4.8357,"Europe/Paris"],["Marseille","France",43.2965,5.3698,"Europe/Paris"],["Toulouse","France",43.6047,1.4442,"Europe/Paris"],["Nice","France",43.7102,7.262,"Europe/Paris"],["Nantes","France",47.2184,-1.5536,"Europe/Paris"],["Strasbourg","France",48.5734,7.7521,"Europe/Paris"],["Bordeaux","France",44.8378,-0.5792,"Europe/Paris"],["Lille","France",50.6292,3.0573,"Europe/Paris"],["Rennes","France",48.1173,-1.6778,"Europe/Paris"],["Montpellier","France",43.6108,3.8767,"Europe/Paris"],["Brest","France",48.3904,-4.4861,"Europe/Paris"],["Grenoble","France",45.1885,5.7245,"Europe/Paris"],["Dijon","France",47.322,5.0415,"Europe/Paris"],["Reims","France",49.2583,4.0317,"Europe/Paris"],["Le Havre","France",49.4944,0.1079,"Europe/Paris"],["Clermont-Ferrand","France",45.7772,3.087,"Europe/Paris"],["Angers","France",47.4784,-0.5632,"Europe/Paris"],["Tours","France",47.3941,0.6848,"Europe/Paris"],["Limoges","France",45.8336,1.2611,"Europe/Paris"],["Metz","France",49.1193,6.1757,"Europe/Paris"],["Orléans","France",47.9029,1.9093,"Europe/Paris"],["Rouen","France",49.4432,1.0993,"Europe/Paris"],["Ajaccio","France",41.9192,8.7386,"Europe/Paris"],["Bruxelles","Belgique",50.8503,4.3517,"Europe/Brussels"],["Genève","Suisse",46.2044,6.1432,"Europe/Zurich"],["Zurich","Suisse",47.3769,8.5417,"Europe/Zurich"],["Lausanne","Suisse",46.5197,6.6323,"Europe/Zurich"],["Luxembourg","Luxembourg",49.6116,6.1319,"Europe/Luxembourg"],["Montréal","Canada",45.5017,-73.5673,"America/Toronto"],["Casablanca","Maroc",33.5731,-7.5898,"Africa/Casablanca"],["Alger","Algérie",36.7538,3.0588,"Africa/Algiers"],["Tunis","Tunisie",36.8065,10.1815,"Africa/Tunis"],["Dakar","Sénégal",14.7167,-17.4677,"Africa/Dakar"],["Abidjan","Côte d'Ivoire",5.36,-4.0083,"Africa/Abidjan"],["Londres","Royaume-Uni",51.5074,-0.1278,"Europe/London"],["Madrid","Espagne",40.4168,-3.7038,"Europe/Madrid"],["Barcelone","Espagne",41.3851,2.1734,"Europe/Madrid"],["Lisbonne","Portugal",38.7223,-9.1393,"Europe/Lisbon"],["Rome","Italie",41.9028,12.4964,"Europe/Rome"],["Berlin","Allemagne",52.52,13.405,"Europe/Berlin"],["Amsterdam","Pays-Bas",52.3676,4.9041,"Europe/Amsterdam"],["Moscou","Russie",55.7558,37.6173,"Europe/Moscow"],["Istanbul","Turquie",41.0082,28.9784,"Europe/Istanbul"],["Beyrouth","Liban",33.8938,35.5018,"Asia/Beirut"],["Le Caire","Égypte",30.0444,31.2357,"Africa/Cairo"],["Dubaï","Émirats arabes unis",25.2048,55.2708,"Asia/Dubai"],["Mumbai","Inde",19.076,72.8777,"Asia/Kolkata"],["Delhi","Inde",28.6139,77.209,"Asia/Kolkata"],["Pékin","Chine",39.9042,116.4074,"Asia/Shanghai"],["Shanghai","Chine",31.2304,121.4737,"Asia/Shanghai"],["Tokyo","Japon",35.6762,139.6503,"Asia/Tokyo"],["Kyoto","Japon",35.0116,135.7681,"Asia/Tokyo"],["Sydney","Australie",-33.8688,151.2093,"Australia/Sydney"],["New York","États-Unis",40.7128,-74.006,"America/New_York"],["Los Angeles","États-Unis",34.0522,-118.2437,"America/Los_Angeles"],["Mexico","Mexique",19.4326,-99.1332,"America/Mexico_City"],["São Paulo","Brésil",-23.5505,-46.6333,"America/Sao_Paulo"],["Buenos Aires","Argentine",-34.6037,-58.3816,"America/Argentina/Buenos_Aires"],["Lima","Pérou",-12.0464,-77.0428,"America/Lima"]];

/* ==================== UTILS ==================== */
const $=(s,r)=>(r||document).querySelector(s);
const $$=(s,r)=>Array.from((r||document).querySelectorAll(s));
const sleep=ms=>new Promise(r=>setTimeout(r,ms));
const esc=s=>String(s==null?'':s).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
const readLS=(k,d)=>{try{const v=localStorage.getItem(k);return v?JSON.parse(v):d;}catch(e){return d;}};
const writeLS=(k,v)=>{try{localStorage.setItem(k,JSON.stringify(v));return true;}catch(e){console.error('[EsotherIA] Stockage indisponible',e);if(typeof toast==='function')toast('Stockage saturé : exportez votre dossier puis libérez de la place.','err');return false;}};
const delLS=k=>{try{localStorage.removeItem(k);}catch(e){}};
const clamp=(v,a,b)=>Math.max(a,Math.min(b,v));
function toast(m,kind){const w=$('#toastWrap');if(!w)return;const el=document.createElement('div');el.className='toast '+(kind||'');el.textContent=m;w.appendChild(el);setTimeout(()=>{el.style.opacity='0';el.style.transition='opacity .3s';setTimeout(()=>el.remove(),320);},4600);}
function swapIn(el){if(!el)return;el.classList.remove('swap-in');void el.offsetWidth;el.classList.add('swap-in');}
async function mapLimit(items,limit,fn){const ret=new Array(items.length);let i=0;const n=Math.max(1,Math.min(limit,items.length));await Promise.all(Array.from({length:n},async()=>{while(i<items.length){const idx=i++;ret[idx]=await fn(items[idx],idx);}}));return ret;}
function rnd(n){try{const a=new Uint32Array(1);crypto.getRandomValues(a);return a[0]%n;}catch(e){return Math.floor(Math.random()*n);}}
function pickN(arr,n){const c=arr.slice(),o=[];for(let i=0;i<n&&c.length;i++)o.push(c.splice(rnd(c.length),1)[0]);return o;}
function hashStr(s){let h=2166136261;for(let i=0;i<s.length;i++){h^=s.charCodeAt(i);h=Math.imul(h,16777619);}return h>>>0;}
function persistedSeed(seedKey){
 if(!state.picks.randomSeeds)state.picks.randomSeeds={};
 if(!Object.prototype.hasOwnProperty.call(state.picks.randomSeeds,seedKey)){
  const a=new Uint32Array(1);
  try{crypto.getRandomValues(a);state.picks.randomSeeds[seedKey]=a[0]>>>0;}
  catch(e){state.picks.randomSeeds[seedKey]=(Date.now()^Math.floor(Math.random()*0xffffffff))>>>0;}
  writeLS(LS.picks,state.picks);
 }
 return state.picks.randomSeeds[seedKey]>>>0;
}
function seedRand(seed){
 let h=persistedSeed(String(seed));
 return()=>{h^=h<<13;h^=h>>>17;h^=h<<5;h>>>=0;return h/4294967296;};
}
function seededPick(arr,seed){if(!Array.isArray(arr)||!arr.length)return null;const r=seedRand(seed);return arr[Math.floor(r()*arr.length)];}
function dateKey(d){return d.getFullYear()+'-'+String(d.getMonth()+1).padStart(2,'0')+'-'+String(d.getDate()).padStart(2,'0');}
function isoWeek(d){const t=new Date(Date.UTC(d.getFullYear(),d.getMonth(),d.getDate()));const dn=t.getUTCDay()||7;t.setUTCDate(t.getUTCDate()+4-dn);const y0=new Date(Date.UTC(t.getUTCFullYear(),0,1));return Math.ceil((((t-y0)/86400000)+1)/7);}
function quarterOf(d){return Math.floor(d.getMonth()/3)+1;}
const MONTHS_FR=['janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre'];
const DAYS_FR=['dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi'];
const DOW_SHORT=['L','M','M','J','V','S','D'];
function frDate(d){return DAYS_FR[d.getDay()]+' '+d.getDate()+' '+MONTHS_FR[d.getMonth()]+' '+d.getFullYear();}
function addDays(d,n){const x=new Date(d);x.setDate(d.getDate()+n);return x;}

/* ==================== ROBUST JSON ==================== */
function robustParseJSON(text){
 if(!text)return null;
 let t=String(text).trim().replace(/^\uFEFF/,'');
 try{return JSON.parse(t);}catch(e){}
 t=t.replace(/```(?:json|JSON|javascript|js)?\s*\n?/g,'').replace(/```/g,'').trim();
 try{return JSON.parse(t);}catch(e){}
 const first=t.indexOf('{');if(first<0)return null;
 let depth=0,inStr=false,escape=false;
 for(let i=first;i<t.length;i++){
  const c=t[i];
  if(escape){escape=false;continue;}
  if(c==='\\'){escape=true;continue;}
  if(c==='"'){inStr=!inStr;continue;}
  if(inStr)continue;
  if(c==='{')depth++;
  else if(c==='}'){depth--;if(depth===0){const cand=t.slice(first,i+1);
   try{return JSON.parse(cand);}catch(e){
    try{return JSON.parse(cand.replace(/[\u201C\u201D\u00AB\u00BB]/g,'"').replace(/[\u2018\u2019]/g,"'").replace(/,\s*([}\]])/g,'$1'));}catch(e2){return null;}
   }}}
 }
 return null;
}

/* ==================== ASTRONOMY ==================== */
const RAD=Math.PI/180,DEG=180/Math.PI;
const rev=x=>{x=x%360;return x<0?x+360:x;};
const sind=x=>Math.sin(x*RAD),cosd=x=>Math.cos(x*RAD),atan2d=(y,x)=>Math.atan2(y,x)*DEG;
const SIGNS=['Bélier','Taureau','Gémeaux','Cancer','Lion','Vierge','Balance','Scorpion','Sagittaire','Capricorne','Verseau','Poissons'];
const SIGN_GLYPH=['♈','♉','♊','♋','♌','♍','♎','♏','♐','♑','♒','♓'];
const NAK=['Ashwini','Bharani','Krittika','Rohini','Mrigashira','Ardra','Punarvasu','Pushya','Ashlesha','Magha','Purva Phalguni','Uttara Phalguni','Hasta','Chitra','Swati','Vishakha','Anuradha','Jyeshtha','Mula','Purva Ashadha','Uttara Ashadha','Shravana','Dhanishta','Shatabhisha','Purva Bhadrapada','Uttara Bhadrapada','Revati'];
const signOf=l=>SIGNS[Math.floor(rev(l)/30)];
const fmtDeg=l=>{const d=rev(l)%30;const dd=Math.floor(d);const mm=Math.floor((d-dd)*60);return dd+'°'+String(mm).padStart(2,'0')+'′';};
function julianDay(y,m,d,hUT){if(m<=2){y--;m+=12;}const A=Math.floor(y/100),B=2-A+Math.floor(A/4);return Math.floor(365.25*(y+4716))+Math.floor(30.6001*(m+1))+d+B-1524.5+hUT/24;}
function jdFromUTC(y,m,d,h,mi,off){return (Date.UTC(y,m-1,d,h,mi)-off*60000)/86400000+2440587.5;}
function tzOffsetMinutes(tz,y,m,d,h,mi){try{const fmt=new Intl.DateTimeFormat('en-US',{timeZone:tz,timeZoneName:'longOffset',hour:'numeric'});const off=ts=>{const p=fmt.formatToParts(new Date(ts)).find(x=>x.type==='timeZoneName');const mt=/GMT([+\-\u2212])(\d{1,2})(?::(\d{2}))?/.exec(p?p.value:'');if(!mt)return 0;const s=mt[1]==='+'?1:-1;return s*(parseInt(mt[2],10)*60+parseInt(mt[3]||'0',10));};const g=Date.UTC(y,m-1,d,h,mi);let o=off(g);o=off(g-o*60000);return o;}catch(e){return null;}}
function kepler(M,e){let E=M+e*DEG*sind(M)*(1+e*cosd(M));for(let i=0;i<30;i++){const dE=(E-e*DEG*sind(E)-M)/(1-e*cosd(E));E-=dE;if(Math.abs(dE)<1e-7)break;}return E;}
function elems(name,d){switch(name){
 case 'Sun':return{N:0,i:0,w:282.9404+4.70935e-5*d,a:1,e:0.016709-1.151e-9*d,M:356.047+0.9856002585*d};
 case 'Moon':return{N:125.1228-0.0529538083*d,i:5.1454,w:318.0634+0.1643573223*d,a:60.2666,e:0.0549,M:115.3654+13.0649929509*d};
 case 'Mercure':return{N:48.3313+3.24587e-5*d,i:7.0047+5e-8*d,w:29.1241+1.01444e-5*d,a:0.387098,e:0.205635+5.59e-10*d,M:168.6562+4.0923344368*d};
 case 'Vénus':return{N:76.6799+2.4659e-5*d,i:3.3946+2.75e-8*d,w:54.891+1.38374e-5*d,a:0.72333,e:0.006773-1.302e-9*d,M:48.0052+1.6021302244*d};
 case 'Mars':return{N:49.5574+2.11081e-5*d,i:1.8497-1.78e-8*d,w:286.5016+2.92961e-5*d,a:1.523688,e:0.093405+2.516e-9*d,M:18.6021+0.5240207766*d};
 case 'Jupiter':return{N:100.4542+2.76854e-5*d,i:1.303-1.557e-7*d,w:273.8777+1.64505e-5*d,a:5.20256,e:0.048498+4.469e-9*d,M:19.895+0.0830853001*d};
 case 'Saturne':return{N:113.6634+2.3898e-5*d,i:2.4886-1.081e-7*d,w:339.3939+2.97661e-5*d,a:9.55475,e:0.055546-9.499e-9*d,M:316.967+0.0334442282*d};
 case 'Uranus':return{N:74.0005+1.3978e-5*d,i:0.7733+1.9e-8*d,w:96.6612+3.0565e-5*d,a:19.18171-1.55e-8*d,e:0.047318+7.45e-9*d,M:142.5905+0.011725806*d};
 case 'Neptune':return{N:131.7806+3.0173e-5*d,i:1.77-2.55e-7*d,w:272.8461-6.027e-6*d,a:30.05826+3.313e-8*d,e:0.008606+2.15e-9*d,M:260.2471+0.005995147*d};
}}
function planetsAt(jd){
 const d=jd-2451543.5;const S=elems('Sun',d);const Es=kepler(S.M,S.e);const xv=cosd(Es)-S.e,yv=Math.sqrt(1-S.e*S.e)*sind(Es);
 const vs=atan2d(yv,xv),rs=Math.sqrt(xv*xv+yv*yv);const lonSun=rev(vs+S.w);const xs=rs*cosd(lonSun),ys=rs*sind(lonSun);
 const out={};out['Soleil']=lonSun;
 const Mo=elems('Moon',d);const Em=kepler(Mo.M,Mo.e);const xm=Mo.a*(cosd(Em)-Mo.e),ym=Mo.a*Math.sqrt(1-Mo.e*Mo.e)*sind(Em);
 const vm=atan2d(ym,xm),rm=Math.sqrt(xm*xm+ym*ym);
 const xh=rm*(cosd(Mo.N)*cosd(vm+Mo.w)-sind(Mo.N)*sind(vm+Mo.w)*cosd(Mo.i));
 const yh=rm*(sind(Mo.N)*cosd(vm+Mo.w)+cosd(Mo.N)*sind(vm+Mo.w)*cosd(Mo.i));
 let lm=atan2d(yh,xh);
 const Ms=S.M,Mm=Mo.M,Lm=Mo.N+Mo.w+Mo.M,Ls=S.w+S.M,D=Lm-Ls,F=Lm-Mo.N;
 lm+=-1.274*sind(Mm-2*D)+0.658*sind(2*D)-0.186*sind(Ms)-0.059*sind(2*Mm-2*D)-0.057*sind(Mm-2*D+Ms)+0.053*sind(Mm+2*D)+0.046*sind(2*D-Ms)+0.041*sind(Mm-Ms)-0.035*sind(D)-0.031*sind(Mm+Ms)-0.015*sind(2*F-2*D)+0.011*sind(Mm-4*D);
 out['Lune']=rev(lm);
 ['Mercure','Vénus','Mars','Jupiter','Saturne','Uranus','Neptune'].forEach(n=>{
  const P=elems(n,d);const E=kepler(P.M,P.e);const x=P.a*(cosd(E)-P.e),y=P.a*Math.sqrt(1-P.e*P.e)*sind(E);
  const v=atan2d(y,x),r=Math.sqrt(x*x+y*y);
  const X=r*(cosd(P.N)*cosd(v+P.w)-sind(P.N)*sind(v+P.w)*cosd(P.i));
  const Y=r*(sind(P.N)*cosd(v+P.w)+cosd(P.N)*sind(v+P.w)*cosd(P.i));
  const Z=r*sind(v+P.w)*sind(P.i);
  let lon=atan2d(Y,X);const lat=atan2d(Z,Math.sqrt(X*X+Y*Y));
  const Xh=r*cosd(lon)*cosd(lat),Yh=r*sind(lon)*cosd(lat);
  out[n]=rev(atan2d(Yh+ys,Xh+xs));
 });
 return out;
}
function ascMc(jd,lat,lonE){
 const T=(jd-2451545)/36525;const eps=23.4392911-0.0130042*T;
 const gmst=rev(280.46061837+360.98564736629*(jd-2451545)+0.000387933*T*T);
 const ramc=rev(gmst+lonE);
 const asc=rev(atan2d(cosd(ramc),-(sind(ramc)*cosd(eps)+Math.tan(lat*RAD)*sind(eps))));
 const mc=rev(atan2d(sind(ramc),cosd(ramc)*cosd(eps)));
 return{asc,mc,ramc};
}
function moonPhase(sun,moon){const a=rev(moon-sun);const names=['Nouvelle Lune','Premier croissant','Premier quartier','Lune gibbeuse croissante','Pleine Lune','Lune gibbeuse décroissante','Dernier quartier','Dernier croissant'];return{angle:a,name:names[Math.floor(rev(a+22.5)/45)%8],illum:Math.round((1-cosd(a))/2*100)};}
function positionsForDate(d){const jd=d.getTime()/86400000+2440587.5;const pos=planetsAt(jd);const ph=moonPhase(pos['Soleil'],pos['Lune']);return{jd,pos,ph};}

/* ==================== NUMEROLOGY / BAZI / KUA ==================== */
const normName=s=>String(s||'').normalize('NFD').replace(/[\u0300-\u036f]/g,'').toUpperCase().replace(/[^A-Z]/g,'');
const letterVal=c=>((c.charCodeAt(0)-65)%9)+1;
function sumLetters(s,f){let t=0;for(const c of normName(s)){if(!f||f(c))t+=letterVal(c);}return t;}
function reduceNum(n){while(n>9&&n!==11&&n!==22&&n!==33)n=String(n).split('').reduce((s,x)=>s+(+x),0);return n;}
const VOY=c=>'AEIOU'.indexOf(c)>=0;
function numerology(p,y,m,d,now){
 const full=(p.prenoms||'')+' '+(p.nomNaissance||'');
 const dd=reduceNum(d),mm=reduceNum(m),yy=reduceNum(String(y).split('').reduce((s,c)=>s+(+c),0));
 const lp=reduceNum(dd+mm+yy);
 const expr=reduceNum(sumLetters(full)),soul=reduceNum(sumLetters(full,VOY)),pers=reduceNum(sumLetters(full,c=>!VOY(c)));
 const maturity=reduceNum(lp+expr);
 const cy=now.getFullYear(),cm=now.getMonth()+1,cd=now.getDate();
 const py=reduceNum(dd+mm+reduceNum(String(cy).split('').reduce((s,c)=>s+(+c),0)));
 const pm=reduceNum(py+reduceNum(cm));const pd=reduceNum(pm+reduceNum(cd));
 return{lp,expr,soul,pers,maturity,py,pm,pd,birthday:d,full:full.trim()};
}
const STEMS=['Jia','Yi','Bing','Ding','Wu','Ji','Geng','Xin','Ren','Gui'];
const STEM_EL=['Bois','Bois','Feu','Feu','Terre','Terre','Métal','Métal','Eau','Eau'];
const BRANCHES=['Zi','Chou','Yin','Mao','Chen','Si','Wu','Wei','Shen','You','Xu','Hai'];
const ANIMALS=['Rat','Buffle','Tigre','Lapin','Dragon','Serpent','Cheval','Chèvre','Singe','Coq','Chien','Cochon'];
const BR_EL=['Eau','Terre','Bois','Bois','Terre','Feu','Feu','Terre','Métal','Métal','Terre','Eau'];
function pillar(s,b){return{stem:STEMS[s],stemEl:STEM_EL[s],yang:s%2===0,branch:BRANCHES[b],animal:ANIMALS[b],branchEl:BR_EL[b],s,b};}
function bazi(y,m,d,h,timeKnown,sunLon){
 let by=y;if(m<=2&&sunLon<315)by=y-1;
 const year=pillar(((by-4)%10+10)%10,((by-4)%12+12)%12);
 const mIdx=Math.floor(rev(sunLon-315)/30);const mBr=(2+mIdx)%12;
 const mStem=((year.s%5)*2+2+mIdx)%10;const month=pillar(mStem,mBr);
 const jdn=Math.round(julianDay(y,m,d,12));const di=(((jdn-2451545+54)%60)+60)%60;
 const day=pillar(di%10,di%12);
 let hour=null;if(timeKnown){const hb=Math.floor(((h+1)%24)/2);hour=pillar(((day.s%5)*2+hb)%10,hb);}
 const count={Bois:0,Feu:0,Terre:0,Métal:0,Eau:0};
 [year,month,day,hour].forEach(p=>{if(p){count[p.stemEl]++;count[p.branchEl]++;}});
 const missing=Object.keys(count).filter(k=>count[k]===0);
 const dominant=Object.keys(count).sort((a,b)=>count[b]-count[a])[0];
 return{year,month,day,hour,count,missing,dominant,baziYear:by,dayMaster:day.stem+' ('+day.stemEl+(day.yang?' Yang':' Yin')+')'};
}
function kuaNumber(by,gender){
 let s=by;while(s>9)s=String(s).split('').reduce((a,c)=>a+(+c),0);
 const male=gender==='M';let k;
 if(male)k=by<2000?11-s:9-s;else k=by<2000?s+4:s+6;
 while(k>9||k<=0){if(k<=0)k+=9;else k=String(k).split('').reduce((a,c)=>a+(+c),0);}
 if(k===5)k=male?2:8;
 return{n:k,group:[1,3,4,9].indexOf(k)>=0?'Est':'Ouest'};
}

/* ==================== DATASETS ==================== */
const TAROT=[["Le Mat","l'élan, le saut dans l'inconnu"],["Le Bateleur","l'initiative, les talents"],["La Papesse","le silence, le savoir"],["L'Impératrice","la création, l'abondance"],["L'Empereur","la structure, la protection"],["Le Pape","la transmission"],["L'Amoureux","le choix"],["Le Chariot","la direction"],["La Justice","l'équilibre"],["L'Hermite","le recul, la quête"],["La Roue de Fortune","le cycle"],["La Force","le courage doux"],["Le Pendu","la suspension"],["L'Arcane sans nom","la transformation"],["La Tempérance","l'harmonie"],["Le Diable","l'attachement"],["La Tour","la rupture"],["L'Étoile","l'espoir"],["La Lune","le doute, l'intuition"],["Le Soleil","la joie, la clarté"],["Le Jugement","l'appel, le bilan"],["Le Monde","l'accomplissement"]];
const LENORMAND=[["Cavalier","une nouvelle, un message"],["Trèfle","la chance passagère"],["Navire","le voyage"],["Maison","le foyer"],["Arbre","la santé"],["Nuages","le doute"],["Serpent","la trahison"],["Cercueil","la fin"],["Bouquet","la joie"],["Faux","la coupure"],["Fouet","le conflit"],["Oiseaux","la communication"],["Enfant","la nouveauté"],["Renard","la ruse"],["Ours","la force"],["Étoiles","la clarté"],["Cigogne","le changement"],["Chien","la fidélité"],["Tour","l'isolement"],["Jardin","le public"],["Montagne","l'obstacle"],["Chemin","le choix"],["Souris","le stress"],["Cœur","l'amour"],["Bague","l'engagement"],["Livre","le savoir"],["Lettre","la nouvelle"],["Homme","le masculin"],["Femme","le féminin"],["Lys","la paix"],["Soleil","le succès"],["Lune","la renommée"],["Clé","la solution"],["Poisson","l'abondance"],["Ancre","la stabilité"],["Croix","le destin"]];
const RUNES=[["Fehu","la richesse qui circule"],["Uruz","la force vitale"],["Thurisaz","le seuil, le défi"],["Ansuz","la parole, le message"],["Raidho","le voyage, le rythme"],["Kenaz","la torche, le savoir-faire"],["Gebo","le don, l'échange"],["Wunjo","la joie, l'harmonie"],["Hagalaz","la tempête qui nettoie"],["Nauthiz","le besoin, la contrainte"],["Isa","la pause, le gel"],["Jera","la récolte, le cycle"],["Eihwaz","l'endurance, l'axe"],["Perthro","le sort, le mystère"],["Algiz","la protection"],["Sowilo","le soleil, la victoire"],["Tiwaz","la justice, le sacrifice"],["Berkano","la croissance, la naissance"],["Ehwaz","la coopération, la confiance"],["Mannaz","l'humain, le soi"],["Laguz","l'eau, l'intuition"],["Ingwaz","la gestation"],["Dagaz","l'aube, la percée"],["Othala","l'héritage, le foyer"]];
const GEO=[["Via","le chemin, le mouvement"],["Cauda Draconis","la sortie, la fin d'un cycle"],["Puer","l'impulsion, le courage brouillon"],["Fortuna Minor","la petite chance, passagère"],["Puella","la douceur, la beauté"],["Amissio","la perte, le lâcher-prise"],["Carcer","la limite, la structure"],["Coniunctio","la rencontre, l'union"],["Acquisitio","le gain, ce qu'on obtient"],["Rubeus","la passion, l'excès"],["Laetitia","la joie qui monte"],["Caput Draconis","le seuil, le commencement"],["Tristitia","la tristesse, l'ancrage"],["Fortuna Maior","la grande chance, stable"],["Albus","la sagesse, la paix"],["Populus","la foule, le collectif"]];
const BELLINE=[["Le Soleil","la réussite"],["La Lune","l'intuition"],["Les Étoiles","l'espoir"],["Le Ciel","la clarté"],["La Terre","l'ancrage"],["Le Feu","la passion"],["L'Eau","l'émotion"],["L'Air","la communication"],["Le Printemps","le renouveau"],["L'Été","l'abondance"],["L'Automne","le bilan"],["L'Hiver","le repos"],["La Montagne","l'épreuve"],["La Rivière","le flux"],["L'Arbre","la croissance"],["La Forêt","l'inconscient"],["La Rose","l'amour"],["Le Lys","la pureté"],["Le Serpent","la tentation"],["L'Aigle","la vision"],["Le Cheval","l'élan"],["Le Bœuf","le travail"],["Le Loup","l'instinct"],["Le Renard","la ruse"],["L'Ours","la force"],["Le Lion","le courage"],["Le Chat","l'indépendance"],["Le Chien","la fidélité"],["Le Papillon","la transformation"],["L'Abeille","le travail"]];
const YJ_NAMES=["Le Créateur","Le Réceptif","La Difficulté initiale","La Folie juvénile","L'Attente","Le Conflit","L'Armée","La Solidarité","Le Petit","La Marche","La Paix","La Stagnation","La Communauté","La Possession du grand","La Modestie","L'Enthousiasme","La Suite","Le Travail sur ce qui est corrompu","L'Approche","La Contemplation","Mordre au travers","La Grâce","L'Éclatement","Le Retour","L'Innocence","Le Grand","Les Commissures des lèvres","La Prépondérance du grand","L'Insondable","Le Feu","L'Influence","La Durée","La Retraite","La Puissance du grand","Le Progrès","L'Obscurcissement de la lumière","Le Clan","L'Opposition","L'Obstacle","La Libération","La Diminution","L'Augmentation","La Percée","Venir à la rencontre","Le Rassemblement","La Poussée vers le haut","L'Accablement","Le Puits","La Révolution","Le Chaudron","L'Ébranlement","L'Immobilisation","Le Développement","La Jeune fille qui se marie","L'Abondance","Le Voyageur","Le Doux","Le Serein","La Dissolution","La Limitation","La Vérité intérieure","La Prépondérance du petit","Après l'accomplissement","Avant l'accomplissement"];
const TRI_BITS=['111','100','010','001','000','011','101','110'];
const KW=[[1,34,5,26,11,9,14,43],[25,51,3,27,24,42,21,17],[6,40,29,4,7,59,64,47],[33,62,39,52,15,53,56,31],[12,16,8,23,2,20,35,45],[44,32,48,18,46,57,50,28],[13,55,63,22,36,37,30,49],[10,54,60,41,19,61,38,58]];
const HEX_NUM=b=>KW[TRI_BITS.indexOf(b.slice(0,3))][TRI_BITS.indexOf(b.slice(3,6))];
const OGHAM=['Bouleau (Beith)','Sorbier (Luis)','Frêne (Nion)','Aulne (Fearn)','Saule (Saille)','Aubépine (Huathe)','Chêne (Duir)','Houx (Tinne)','Noisetier (Coll)','Pommier (Quert)','Vigne (Muin)','Lierre (Gort)','Roseau (Ngetal)','Sureau (Ruis)','Hêtre (Ur)','Ajonc (Onn)','Genêt (Eadhadh)','Bruyère (Idhadh)','Peuplier (Eadha)','If (Ioho)'];
const STONES=[['Améthyste','l’apaisement mental'],['Quartz rose','la douceur'],['Labradorite','la protection'],['Aigue-marine','la parole juste'],['Citrine','la joie'],['Obsidienne','la lucidité'],['Jade','l’ancrage'],['Turquoise','l’expression'],['Cornaline','le courage'],['Œil de tigre','la décision'],['Lapis-lazuli','la vérité'],['Grenat','la vitalité']];
const OILS=[['Lavande','l’apaisement'],['Citron','la clarté'],['Menthe poivrée','la concentration'],['Eucalyptus','la respiration'],['Romarin','la mémoire'],['Camomille','le lâcher-prise'],['Ylang-ylang','la joie'],['Vétiver','l’ancrage'],['Orange douce','la chaleur'],['Encens','le recueillement']];
const ARCHETYPES=['Le Héros','Le Sage','L’Explorateur','Le Créateur','Le Guerrier','L’Innocent','L’Amoureux','Le Souverain','Le Magicien','Le Rebelle','Le Soignant','Le Bouffon'];
const SEPHIRA=['Keter — Couronne','Chokhmah — Sagesse','Binah — Compréhension','Chesed — Miséricorde','Gevurah — Rigueur','Tiferet — Beauté','Netzach — Victoire','Hod — Gloire','Yesod — Fondation','Malkhut — Royaume'];
const ALCHY_STAGES=[['Nigredo','le noir, la dissolution'],['Albedo','le blanc, la clarification'],['Citrinitas','le jaune, l’aube'],['Rubedo','le rouge, l’incarnation']];
const ENNEAGRAM=[['Type 1 — Le Perfectionniste','l’idéal, la rigueur'],['Type 2 — L’Altruiste','le don, l’aide'],['Type 3 — Le Battant','la réussite, l’image'],['Type 4 — L’Individualiste','l’authenticité'],['Type 5 — L’Observateur','le savoir'],['Type 6 — Le Loyal','la sécurité'],['Type 7 — L’Épicurien','la joie'],['Type 8 — Le Chef','la puissance'],['Type 9 — Le Médiateur','l’harmonie']];
const IFA_ODU=[['Ogbe','la lumière, l\'ouverture'],['Oyeku','la fin, le seuil'],['Iwori','la transformation'],['Odi','la fécondité'],['Irosun','la mémoire'],['Iwanrin','l\'harmonie'],['Obara','l\'expansion'],['Okanran','le feu intérieur'],['Ogunda','le fer, l\'action'],['Osa','la tempête'],['Ika','la discipline'],['Oturupon','le respect'],['Otura','la sagesse'],['Irete','la patience'],['Ose','la douceur'],['Ofun','la nuit']];
const EGYPT_DECANS=['Khnoumis','Khnoumis II','Hauteur','Osiris','Isis','Seth','Horus','Anubis','Thot','Sothis','Sopdet','Sah'];
const OMIKUJI=[['Daikichi','grande chance'],['Chukichi','chance moyenne'],['Shokichi','petite chance'],['Kichi','chance'],['Suekichi','chance à venir'],['Kyo','mauvais présage'],['Daikyo','grand mauvais présage'],['Hankichi','chance partielle']];
const HUNA_VALUES=['Aloha','Ha\'aheo','Ahonui','Akahele','Hooponopono','Kala','Kupono','Mahalo'];
const SAMI_ANIMALS=['Renne','Loup arctique','Ours brun','Aigle royal','Lynx','Glouton','Renard polaire'];
const INCA_CEQUES=['Chinchaysuyo','Antisuyo','Collasuyo','Cuntisuyo'];
const ORPHIC_HYMN=['Protogonos','Ouranos','Kronos','Zeus','Dionysos','Perséphone','Hécate','Apollon'];

const AYU=[
 {k:'ay1',q:'Corpulence naturelle',o:[['V','Mince, os fins'],['P','Moyenne, musclée'],['K','Large, solide']]},
 {k:'ay2',q:'Peau',o:[['V','Sèche, fine'],['P','Chaude, sensible'],['K','Épaisse, douce']]},
 {k:'ay3',q:'Appétit',o:[['V','Irrégulier'],['P','Fort'],['K','Lent, stable']]},
 {k:'ay4',q:'Sommeil',o:[['V','Léger, interrompu'],['P','Modéré'],['K','Long et lourd']]},
 {k:'ay5',q:'Sous stress',o:[['V','Anxieux, dispersé'],['P','Irritable'],['K','Replié, lent']]},
 {k:'ay6',q:'Ce que je supporte le moins',o:[['V','Le froid et le vent'],['P','La chaleur'],['K','L’humidité']]},
 {k:'ay7',q:'Mental',o:[['V','Rapide, créatif'],['P','Précis'],['K','Posé, mémoire longue']]}
];
function ayuValidations(p){const s={V:0,P:0,K:0};let n=0;AYU.forEach(q=>{if(p[q.k]){s[p[q.k]]++;n++;}});const arr=Object.entries(s).sort((a,b)=>b[1]-a[1]);let res='non déterminé';if(n>=4){const nm={V:'Vata',P:'Pitta',K:'Kapha'};res=(arr[0][1]-arr[1][1]<=1)?'mixte '+nm[arr[0][0]]+'-'+nm[arr[1][0]]:nm[arr[0][0]];}return{s,n,res};}


/* ==================== SCIENCE FACTORY (divination) ==================== */
function buildDiv(id,name,icon,color,cat,intro,principles,dataset,positions,on){
 return{id,name,icon,color,cat,intro,principles,on:!!on,
  compute(period,c,p,k,date){
   const stored=k[id];
   if(Array.isArray(stored)&&stored.length===positions.length){
    const getCard=x=>{
     if(!x)return['—','—'];
     if(Array.isArray(x.card))return x.card;
     if(typeof x.card==='string'){const found=dataset.find(d=>d[0]===x.card);return found||[x.card,'—'];}
     if(x.name){const found=dataset.find(d=>d[0]===x.name);return found||[x.name,x.kwUp||'—'];}
     return['—','—'];
    };
    return{headline:stored.map(x=>getCard(x)[0]||'—').join(' · '),facts:stored.map(x=>{const card=getCard(x);return (x.pos||'—')+' : '+(card[0]||'—')+' — '+(card[1]||'—');})};
   }
   const seed=dateKey(date)+':'+c.num.full+':'+id;
   const r=seedRand(seed);const picks=[];const used=new Set();
   while(picks.length<positions.length){const i=Math.floor(r()*dataset.length);if(used.has(i))continue;used.add(i);picks.push({pos:positions[picks.length],card:dataset[i]});}
   return{headline:picks.map(x=>x.card[0]).join(' · '),facts:picks.map(x=>x.pos+' : '+x.card[0]+' — '+x.card[1])};
  }};
}

/* ==================== SCIENCES ==================== */
const SCIENCES=[
/* ASTRES */
{id:'astro',name:'Astrologie occidentale',icon:'bi-stars',color:'#4f46e5',cat:'Astres',on:true,
 intro:`L'astrologie occidentale naît en Mésopotamie, se formalise chez les Grecs (Ptolémée), traverse les savants arabes et devient à la Renaissance la langue symbolique des rois comme des poètes. Elle postule que la configuration du ciel à un instant donné dessine une carte du ciel.`,
 principles:['Thème natal = photo du ciel','12 signes, 12 maisons','Aspects = angles','Transits = météo'],
 compute(period,c,p,k,date){
  const{pos,ph}=positionsForDate(date);const facts=[];
  if(period==='year'||period==='life'||period==='decade'||period==='quarter'){
   facts.push(`Soleil natal : ${c.bodies[0].deg} ${c.bodies[0].sign}`);
   facts.push(`Lune natale : ${c.bodies[1].deg} ${c.bodies[1].sign}`);
   if(c.ascSign)facts.push(`Ascendant : ${fmtDeg(c.asc)} ${c.ascSign}`);
   facts.push(`Jupiter transite : ${signOf(pos['Jupiter'])}`);
   facts.push(`Saturne transite : ${signOf(pos['Saturne'])}`);
   return{headline:`Soleil ${c.bodies[0].sign} · Jupiter ${signOf(pos['Jupiter'])}`,facts};
  }
  facts.push(`Soleil : ${fmtDeg(pos['Soleil'])} ${signOf(pos['Soleil'])}`);
  facts.push(`Lune : ${fmtDeg(pos['Lune'])} ${signOf(pos['Lune'])}`);
  facts.push(`Phase lunaire : ${ph.name} (${ph.illum}%)`);
  return{headline:`Lune ${signOf(pos['Lune'])} · ${ph.name.toLowerCase()}`,facts};
 }},
{id:'bazi',name:'Bazi (astrologie chinoise)',icon:'bi-yin-yang',color:'#059669',cat:'Astres',on:true,
 intro:`Le Bazi (« quatre piliers ») est la branche astrologique de la médecine chinoise. Chaque heure, jour, mois, année porte un tronc céleste et une branche terrestre.`,
 principles:['4 piliers','5 éléments','Maître du jour','Éléments absents'],
 compute(period,c,p,k,date){
  const y=date.getFullYear();const by=(date.getMonth()+1<=2)?y-1:y;
  const ys=((by-4)%10+10)%10,yb=((by-4)%12+12)%12;
  const facts=[`Année ${y} : ${STEMS[ys]}-${BRANCHES[yb]} (${STEM_EL[ys]}/${BR_EL[yb]})`,`Maître du jour : ${c.bazi.dayMaster}`,`Éléments absents : ${c.bazi.missing.join(', ')||'aucun'}`];
  return{headline:`Année ${ANIMALS[yb]} ${STEM_EL[ys]}`,facts};
 }},
{id:'jyotish',name:'Jyotish (védique)',icon:'bi-sun',color:'#d97706',cat:'Astres',on:true,
 intro:`Le Jyotish utilise le zodiaque sidéral, décalé d'environ 24° du zodiaque tropical.`,
 principles:['Zodiaque sidéral','La Lune maîtresse','27 nakshatras'],
 compute(period,c,p,k,date){
  const{jd,pos}=positionsForDate(date);
  const ayan=23.8531+0.013969*((jd-2451545)/365.25);
  const mSid=rev(pos['Lune']-ayan);const nSid=NAK[Math.floor(mSid/(360/27))];
  return{headline:`Lune ${signOf(mSid)} — ${nSid}`,facts:[`Lune natale : ${c.sid.moon}, ${c.sid.nak}`,`Lune actuelle : ${signOf(mSid)} ${fmtDeg(mSid)}`,`Nakshatra : ${nSid}`]};
 }},
{id:'maya',name:'Astrologie maya (Tzolkin)',icon:'bi-circle',color:'#be123c',cat:'Astres',on:true,
 intro:`Le Tzolkin est le calendrier sacré maya de 260 jours.`,
 principles:['260 jours','20 signes × 13 tonalités'],
 compute(period,c,p,k,date){
  const TZ=['Imix','Ik','Akbal','Kan','Chicchan','Cimi','Manik','Lamat','Muluc','Oc','Chuen','Eb','Ben','Ix','Men','Cib','Caban','Etznab','Cauac','Ahau'];
  const ref=Date.UTC(2012,11,21);const diff=Math.round((Date.UTC(date.getFullYear(),date.getMonth(),date.getDate())-ref)/86400000);
  const kin=((160-1+diff)%260+260)%260+1;const tone=((kin-1)%13)+1,sign=TZ[(kin-1)%20];
  return{headline:`Kin ${kin} — ${sign} (${tone}/13)`,facts:[`Kin : ${kin}`,`Signe : ${sign}`,`Tonalité : ${tone}/13`]};
 }},
{id:'celte',name:'Astrologie celte (arbres)',icon:'bi-tree-fill',color:'#16a34a',cat:'Astres',on:true,
 intro:`L'astrologie celte populaire associe chaque personne à un arbre en fonction de sa date de naissance.`,
 principles:['Un arbre par date','Langage poétique'],
 compute(period,c,p,k,date){const idx=(c.birth.d+c.birth.m*31)%OGHAM.length;return{headline:`Arbre ${OGHAM[idx].split(' (')[0]}`,facts:[`Arbre : ${OGHAM[idx]}`,`Date : ${c.birth.d} ${MONTHS_FR[c.birth.m-1]} ${c.birth.y}`]};}},
{id:'aztec',name:'Astrologie aztèque',icon:'bi-brightness-high',color:'#dc2626',cat:'Astres',on:false,
 intro:`Le Tonalpohualli est le calendrier rituel aztèque de 260 jours.`,
 principles:['260 jours','20 signes × 13 chiffres'],
 compute(period,c,p,k,date){const SIGNS_A=['Cipactli','Ehecatl','Calli','Cuetzpalin','Coatl','Miquiztli','Mazatl','Tochtli','Atl','Itzcuintli','Ozomahtli','Malinalli','Acatl','Ocelotl','Cuauhtli','Cozcacuauhtli','Ollin','Tecpatl','Quiahuitl','Xochitl'];const ref=Date.UTC(2012,11,21);const diff=Math.round((Date.UTC(date.getFullYear(),date.getMonth(),date.getDate())-ref)/86400000);const trecena=((diff%260)+260)%260;const sign=SIGNS_A[(trecena)%20];const num=(trecena%13)+1;return{headline:`${num} ${sign}`,facts:[`Signe : ${sign}`,`Chiffre : ${num}/13`]};}},
{id:'hellenistic',name:'Astrologie hellénistique',icon:'bi-columns',color:'#8b5cf6',cat:'Astres',on:false,
 intro:`L'astrologie hellénistique utilise les sectes, les lots et les maisons.`,
 principles:['Secte','Lots','12 maisons'],
 compute(period,c,p,k,date){const diurnal=['Bélier','Gémeaux','Lion','Balance','Sagittaire','Verseau'].indexOf(c.bodies[0].sign)>=0;return{headline:`Secte ${diurnal?'diurne':'nocturne'}`,facts:[`Secte : ${diurnal?'diurne':'nocturne'}`,`Soleil : ${c.bodies[0].sign}`]};}},
{id:'egypt',name:'Astrologie égyptienne (décans)',icon:'bi-sunrise',color:'#d97706',cat:'Astres',on:false,
 intro:`Les Égyptiens divisaient le ciel en 36 décans.`,
 principles:['36 décans','Astronomie sacrée'],
 compute(period,c,p,k,date){const{pos}=positionsForDate(date);const decanIdx=Math.floor(rev(pos['Soleil'])/(360/36));return{headline:`Décan ${EGYPT_DECANS[decanIdx%EGYPT_DECANS.length]}`,facts:[`Décan : ${decanIdx+1}/36`,`Dieu : ${EGYPT_DECANS[decanIdx%EGYPT_DECANS.length]}`]};}},
{id:'ziwei',name:'Zi Wei Dou Shu',icon:'bi-grid-1x2',color:'#7c3aed',cat:'Astres',on:false,
 intro:`Le Zi Wei Dou Shu place 14 étoiles dans 12 palais.`,
 principles:['14 étoiles','12 palais'],
 compute(period,c,p,k,date){const zi=(((c.birth.y-4)%10+10)%10+((c.birth.m+c.birth.d)%12))%14;const stars=['Zi Wei','Tian Ji','Tai Yang','Wu Qu','Tian Tong','Lian Zhen','Tian Fu','Tai Yin','Tan Lang','Ju Men','Tian Xiang','Tian Liang','Qi Sha','Po Jun'];return{headline:`Étoile ${stars[zi]}`,facts:[`Étoile : ${stars[zi]}`,`Date : ${c.birth.d} ${MONTHS_FR[c.birth.m-1]} ${c.birth.y}`]};}},
/* NOMBRES */
{id:'num',name:'Numérologie pythagoricienne',icon:'bi-123',color:'#0ea5e9',cat:'Nombres',on:true,
 intro:`La numérologie pythagoricienne réduit tout nombre à un chiffre de 1 à 9, plus les maîtres 11, 22, 33.`,
 principles:['Réduction 1-9','Chemin de vie','Expression'],
 compute(period,c,p,k,date){const n=c.num;return{headline:`Année ${n.py} · Jour ${n.pd}`,facts:[`Chemin de vie : ${n.lp}`,`Expression : ${n.expr}`,`Année personnelle : ${n.py}`,`Mois personnel : ${n.pm}`,`Jour personnel : ${n.pd}`]};}},
{id:'numChald',name:'Numérologie chaldéenne',icon:'bi-hash',color:'#0891b2',cat:'Nombres',on:false,
 intro:`La numérologie chaldéenne attribue aux lettres des valeurs de 1 à 8.`,
 principles:['Valeurs 1-8','Poids du nom'],
 compute(period,c,p,k,date){const vals={A:1,B:2,C:3,D:4,E:5,F:8,G:3,H:5,I:1,J:1,K:2,L:3,M:4,N:5,O:7,P:8,Q:1,R:2,S:3,T:4,U:6,V:6,W:6,X:5,Y:1,Z:7};const nm=normName((p.prenoms||'')+' '+(p.nomNaissance||''));let tot=0;for(const ch of nm)tot+=vals[ch]||0;return{headline:`Vibration ${reduceNum(tot)}`,facts:[`Nom : ${nm}`,`Somme : ${tot}`,`Réduit : ${reduceNum(tot)}`]};}},
{id:'gematria',name:'Gematria (hébreu)',icon:'bi-alphabet',color:'#be123c',cat:'Nombres',on:false,
 intro:`La gematria est la numérologie sacrée de l'hébreu.`,
 principles:['Valeurs des lettres','Correspondances'],
 compute(period,c,p,k,date){const name=c.num.full||'';let tot=0;for(const ch of name){tot+=ch.charCodeAt(0)%22+1;}return{headline:`Gematria : ${tot}`,facts:[`Nom : ${name}`,`Somme : ${tot}`,`Réduit : ${reduceNum(tot)}`]};}},
/* ORACLES */
buildDiv('tarot','Tarot de Marseille','bi-suit-spade-fill','#7c3aed','Oracles',`Le Tarot de Marseille, apparu au XVᵉ siècle, est devenu outil symbolique au XVIIIᵉ. Ses 22 arcanes majeurs racontent un voyage initiatique.`,['22 arcanes majeurs','Voyage initiatique'],TAROT,['Passé','Présent','À venir'],true),
buildDiv('lenormand','Petit Lenormand','bi-suit-heart-fill','#db2777','Oracles',`Le Petit Lenormand (XIXᵉ s.) comprend 36 cartes illustrées.`,['36 cartes','Lecture par paires'],LENORMAND,['Situation','Obstacle','Issue'],false),
buildDiv('belline','Oracle de Belline','bi-suit-diamond-fill','#0891b2','Oracles',`L'Oracle de Belline (XIXᵉ s.) compte 52 cartes mêlant astres, animaux et éléments.`,['52 cartes','Guidance'],BELLINE,['Passé','Présent','Avenir'],false),
{id:'rune',name:'Runes nordiques',icon:'bi-gem',color:'#b45309',cat:'Oracles',on:true,
 intro:`Les runes sont un alphabet germanique (Futhark ancien, 24 signes).`,
 principles:['24 runes','Un mot, une image'],
 compute(period,c,p,k,date){const rune=(k.rune&&Array.isArray(k.rune))?RUNES.find(r=>r[0]===k.rune[0])||RUNES.find(r=>r[0]===k.rune)||seededPick(RUNES,dateKey(date)+':rune'):(typeof k.rune==='string'?RUNES.find(r=>r[0]===k.rune)||seededPick(RUNES,dateKey(date)+':rune'):seededPick(RUNES,dateKey(date)+':rune'));return{headline:`Rune ${rune[0]}`,facts:[`Rune : ${rune[0]}`,`Signification : ${rune[1]}`]};}},
{id:'yijing',name:'Yi Jing',icon:'bi-compass',color:'#06b6d4',cat:'Oracles',on:true,
 intro:`Le Yi Jing est un texte chinois vieux de 3000 ans.`,
 principles:['64 hexagrammes','6 lignes','Un paysage'],
 compute(period,c,p,k,date){
  if(k.yijing&&k.yijing.num)return{headline:`Hexagramme ${k.yijing.num} — ${k.yijing.name}`,facts:[`Hexagramme : ${k.yijing.num} ${k.yijing.name}`,`Lignes mutantes : ${(k.yijing.moving||[]).join(', ')||'aucune'}`]};
  const r=seedRand(dateKey(date)+':yijing');const lines=[];
  for(let i=0;i<6;i++){let s=0;for(let j=0;j<3;j++)s+=(r()<0.5?3:2);lines.push(s);}
  const bits=lines.map(l=>(l===7||l===9)?'1':'0').join('');const num=HEX_NUM(bits);
  const moving=lines.map((l,i)=>(l===6||l===9)?i+1:0).filter(Boolean);
  return{headline:`Hexagramme ${num} — ${YJ_NAMES[num-1]}`,facts:[`Hexagramme : ${num} ${YJ_NAMES[num-1]}`,`Lignes mutantes : ${moving.join(', ')||'aucune'}`]};
 }},
{id:'geomancy',name:'Géomancie',icon:'bi-grid-3x3',color:'#0d9488',cat:'Oracles',on:true,
 intro:`La géomancie est née au Moyen Âge en Afrique du Nord.`,
 principles:['16 figures','Tracée dans la terre'],
 compute(period,c,p,k,date){const g=(typeof k.geo==='string')?GEO.find(x=>x[0]===k.geo)||seededPick(GEO,dateKey(date)+':geo'):seededPick(GEO,dateKey(date)+':geo');return{headline:`Figure ${g[0]}`,facts:[`Figure : ${g[0]}`,`Signification : ${g[1]}`]};}},
{id:'ifa',name:'Ifá (oracle yoruba)',icon:'bi-bullseye',color:'#92400e',cat:'Oracles',on:false,
 intro:`L'Ifá est l'oracle du peuple Yoruba.`,
 principles:['256 odu','Babalawo'],
 compute(period,c,p,k,date){const r=seedRand(dateKey(date)+':ifa');const pick=IFA_ODU[Math.floor(r()*IFA_ODU.length)];return{headline:`Odu ${pick[0]}`,facts:[`Odu : ${pick[0]}`,`Signification : ${pick[1]}`]};}},
{id:'omikuji',name:'Omikuji (Japon)',icon:'bi-file-text',color:'#dc2626',cat:'Oracles',on:false,
 intro:`L'Omikuji est un papier de présage tiré dans les sanctuaires shinto.`,
 principles:['Papier de présage','Chance aléatoire'],
 compute(period,c,p,k,date){const pick=seededPick(OMIKUJI,dateKey(date)+':omikuji');return{headline:`Omikuji : ${pick[0]}`,facts:[`Présage : ${pick[0]}`,`Signification : ${pick[1]}`]};}},
{id:'mo',name:'Mo tibétain',icon:'bi-dice-3',color:'#a21caf',cat:'Oracles',on:false,
 intro:`Le Mo est une divination tibétaine traditionnelle.`,
 principles:['Dés tibétains','Bouddhisme'],
 compute(period,c,p,k,date){const r=seedRand(dateKey(date)+':mo');const el=['Terre','Eau','Feu','Vent'][Math.floor(r()*4)];const an=ANIMALS[Math.floor(r()*12)];return{headline:`Mo : ${el} / ${an}`,facts:[`Élément : ${el}`,`Animal : ${an}`]};}},
{id:'ogham',name:'Ogham (arbres celtes)',icon:'bi-tree',color:'#65a30d',cat:'Oracles',on:false,
 intro:`L'Ogham est un alphabet celtique gravé sur des pierres.`,
 principles:['20 lettres-arbres'],
 compute(period,c,p,k,date){const t=seededPick(OGHAM,dateKey(date)+':ogham');return{headline:`Ogham : ${t.split(' (')[0]}`,facts:[`Lettre-arbre : ${t}`]};}},
/* OCCULTE */
{id:'alchimie',name:'Alchimie & hermétisme',icon:'bi-droplet-half',color:'#c2410c',cat:'Occulte',on:true,
 intro:`L'alchimie est une tradition symbolique qui a nourri la chimie moderne.`,
 principles:['4 étapes','Matière et esprit'],
 compute(period,c,p,k,date){const st=ALCHY_STAGES[(c.birth.age+date.getFullYear())%4];return{headline:`Étape ${st[0]}`,facts:[`Étape : ${st[0]}`,`Signification : ${st[1]}`]};}},
{id:'kabbale',name:'Kabbale',icon:'bi-book',color:'#be123c',cat:'Occulte',on:true,
 intro:`La Kabbale organise le monde en dix séphiroth.`,
 principles:['10 séphiroth','Arbre de Vie'],
 compute(period,c,p,k,date){const s=p.sephira||seededPick(SEPHIRA,dateKey(date)+':kabbale');return{headline:`Séphira ${s}`,facts:[`Séphira : ${s}`]};}},
{id:'theosophy',name:'Théosophie',icon:'bi-circle-square',color:'#7c3aed',cat:'Occulte',on:false,
 intro:`La Théosophie (Blavatsky, 1875) synthétise traditions orientales et occidentales.`,
 principles:['7 plans','Karma'],
 compute(period,c,p,k,date){const planes=['Physique','Éthérique','Astral','Mental','Causal','Bouddhique','Atmique'];const r=seedRand(dateKey(date)+':theo');return{headline:`Plan ${planes[Math.floor(r()*7)]}`,facts:[`Plan : ${planes[Math.floor(r()*7)]}`]};}},
{id:'wicca',name:'Wicca',icon:'bi-moon',color:'#6d28d9',cat:'Occulte',on:false,
 intro:`La Wicca suit les cycles de la nature.`,
 principles:['8 sabbats','Phases lunaires'],
 compute(period,c,p,k,date){const{ph}=positionsForDate(date);return{headline:`Wicca : ${ph.name}`,facts:[`Phase : ${ph.name}`]};}},
{id:'orphic',name:'Orphisme grec',icon:'bi-music-note-beamed',color:'#7c2d12',cat:'Occulte',on:false,
 intro:`L'orphisme enseigne la transmigration des âmes.`,
 principles:['Transmigration','Hymnes'],
 compute(period,c,p,k,date){const h=seededPick(ORPHIC_HYMN,dateKey(date)+':orphic');return{headline:`Hymne à ${h}`,facts:[`Divinité : ${h}`]};}},
{id:'hoodoo',name:'Hoodoo',icon:'bi-fire',color:'#92400e',cat:'Occulte',on:false,
 intro:`Le Hoodoo mêle herbes, prières et gestes rituels.`,
 principles:['Herbes','Protection'],
 compute(period,c,p,k,date){const herbs=['Romarin','Laurier','Basilic','Menthe','Camomille','Sauge','Verveine'];const h=seededPick(herbs,dateKey(date)+':hoodoo');return{headline:`Herbe ${h}`,facts:[`Herbe : ${h}`]};}},
/* CORPS */
{id:'ayurveda',name:'Ayurvéda',icon:'bi-tree-fill',color:'#65a30d',cat:'Corps',on:true,
 intro:`L'Ayurvéda décrit trois doshas.`,
 principles:['3 doshas','5 éléments'],
 compute(period,c,p,k,date){const ay=ayuValidations(p);return{headline:`Constitution ${ay.res}`,facts:[`Dosha : ${ay.res}`,`Vata : ${ay.s.V}/7`,`Pitta : ${ay.s.P}/7`,`Kapha : ${ay.s.K}/7`]};}},
{id:'mtc',name:'Médecine traditionnelle chinoise',icon:'bi-heart-pulse',color:'#059669',cat:'Corps',on:true,
 intro:`La MTC repose sur les Cinq Éléments.`,
 principles:['5 éléments','Méridiens'],
 compute(period,c,p,k,date){const el=(p.elementMTC||'').split(' :')[0]||'non déterminé';return{headline:`Élément ${el}`,facts:[`Élément : ${el}`,`Terrain : ${p.mtcTemp||'—'}`]};}},
{id:'fengshui',name:'Feng Shui',icon:'bi-house-heart',color:'#0d9488',cat:'Corps',on:true,
 intro:`Le Feng Shui est l'art chinois de l'aménagement.`,
 principles:['Nombre Kua','5 éléments'],
 compute(period,c,p,k,date){return{headline:`Kua ${c.kua.n} (${c.kua.group})`,facts:[`Kua : ${c.kua.n}`,`Groupe : ${c.kua.group}`,`Orientation : ${p.fengshuiOrientation||'—'}`]};}},
{id:'kine',name:'Kinésiologie',icon:'bi-activity',color:'#0891b2',cat:'Corps',on:true,
 intro:`La kinésiologie utilise le test musculaire.`,
 principles:['Test musculaire','4 sphères'],
 compute(period,c,p,k,date){const sp=(p.kinesioSphere||'').split(' :')[0]||'non déterminée';return{headline:`Sphère ${sp}`,facts:[`Sphère : ${sp}`,`Stress : ${p.mentStress||'—'}/10`,`Énergie : ${p.physEnergy||'—'}/10`]};}},
{id:'bio',name:'Biorhythme',icon:'bi-graph-up',color:'#ec4899',cat:'Corps',on:true,
 intro:`Le biorythme est une théorie des années 1900 : trois cycles.`,
 principles:['3 cycles','Grille d\'observation'],
 compute(period,c,p,k,date){const birthMs=Date.UTC(c.birth.y,c.birth.m-1,c.birth.d);const days=Math.max(1,Math.floor((date.getTime()-birthMs)/86400000));const phys=Math.round(Math.sin(2*Math.PI*days/23)*100);const emo=Math.round(Math.sin(2*Math.PI*days/28)*100);const intel=Math.round(Math.sin(2*Math.PI*days/33)*100);return{headline:`Phys ${phys}% · Émo ${emo}% · Intel ${intel}%`,facts:[`Jours : ${days}`,`Physique : ${phys}%`,`Émotionnel : ${emo}%`,`Intellectuel : ${intel}%`]};}},
{id:'litho',name:'Lithothérapie',icon:'bi-diamond',color:'#7c3aed',cat:'Corps',on:true,
 intro:`La lithothérapie utilise les pierres comme supports symboliques.`,
 principles:['Support symbolique'],
 compute(period,c,p,k,date){const s=seededPick(STONES,dateKey(date)+':litho');return{headline:`Pierre ${s[0]}`,facts:[`Pierre : ${s[0]}`,`Signification : ${s[1]}`]};}},
{id:'aroma',name:'Aromathérapie',icon:'bi-droplet',color:'#f59e0b',cat:'Corps',on:true,
 intro:`L'aromathérapie utilise les huiles essentielles avec prudence.`,
 principles:['Huiles essentielles','Prudence'],
 compute(period,c,p,k,date){const o=seededPick(OILS,dateKey(date)+':aroma');return{headline:`Huile ${o[0]}`,facts:[`Huile : ${o[0]}`,`Signification : ${o[1]}`]};}},
/* PSYCHE */
{id:'jung',name:'Archétypes jungiens',icon:'bi-moon-stars',color:'#9333ea',cat:'Psyché',on:true,
 intro:`Carl Gustav Jung a décrit les archétypes.`,
 principles:['Structures de la psyché','Figures des mythes'],
 compute(period,c,p,k,date){const a=p.archetype||'non déterminé';return{headline:`Archétype ${a}`,facts:[`Archétype : ${a}`]};}},
{id:'oniro',name:'Onirocritique',icon:'bi-moon',color:'#6366f1',cat:'Psyché',on:true,
 intro:`L'onirocritique est l'art de lire les rêves.`,
 principles:['Le rêve insiste','Images personnelles'],
 compute(period,c,p,k,date){const m=p.reve||'non renseigné';return{headline:`Motif ${m}`,facts:[`Motif : ${m}`,`Description : ${p.reveTexte||'—'}`]};}},
{id:'enneagram',name:'Ennéagramme',icon:'bi-9-circle',color:'#7c3aed',cat:'Psyché',on:false,
 intro:`L'Ennéagramme décrit 9 types de personnalité.`,
 principles:['9 types','Motivations'],
 compute(period,c,p,k,date){const r=seedRand(dateKey(date)+':ennea');const t=ENNEAGRAM[Math.floor(r()*9)];return{headline:`${t[0]}`,facts:[`Type : ${t[0]}`,`Motivation : ${t[1]}`]};}},
/* NATURE */
{id:'chaman',name:'Druidisme & chamanisme',icon:'bi-tree',color:'#65a30d',cat:'Nature',on:true,
 intro:`Le druidisme est la tradition spirituelle des Celtes.`,
 principles:['Arbres, animaux','Alliés'],
 compute(period,c,p,k,date){const arbre=(k.images&&k.images.arbre)||seededPick(OGHAM,dateKey(date)+':arbre');const animal=(k.images&&k.images.animal)||seededPick(['Loup','Aigle','Cerf','Renard','Ours','Hibou'],dateKey(date)+':animal');return{headline:`${arbre.split(' (')[0]} & ${animal}`,facts:[`Arbre : ${arbre}`,`Animal : ${animal}`]};}},
{id:'lunar',name:'Phase lunaire',icon:'bi-moon-fill',color:'#a78bfa',cat:'Nature',on:false,
 intro:`La Lune traverse 8 phases en 29,5 jours.`,
 principles:['8 phases'],
 compute(period,c,p,k,date){const{ph}=positionsForDate(date);return{headline:`${ph.name} (${ph.illum}%)`,facts:[`Phase : ${ph.name}`,`Illumination : ${ph.illum}%`]};}},
{id:'huna',name:'Huna (Hawaï)',icon:'bi-water',color:'#0ea5e9',cat:'Nature',on:false,
 intro:`Le Huna est la tradition spirituelle hawaïenne.`,
 principles:['7 principes','Ho\'oponopono'],
 compute(period,c,p,k,date){const v=seededPick(HUNA_VALUES,dateKey(date)+':huna');return{headline:`Principe ${v}`,facts:[`Valeur : ${v}`]};}},
{id:'sami',name:'Chamanisme sámi',icon:'bi-snow',color:'#0e7490',cat:'Nature',on:false,
 intro:`Le chamanisme sámi utilise le tambour et le joik.`,
 principles:['Tambour','Joik'],
 compute(period,c,p,k,date){const a=seededPick(SAMI_ANIMALS,dateKey(date)+':sami');return{headline:`Animal allié ${a}`,facts:[`Animal : ${a}`]};}},
{id:'inca',name:'Tradition inca (ceques)',icon:'bi-sun',color:'#ca8a04',cat:'Nature',on:false,
 intro:`Les Incas organisaient l'espace sacré en ceques.`,
 principles:['Ceques','Huacas'],
 compute(period,c,p,k,date){const cq=seededPick(INCA_CEQUES,dateKey(date)+':inca');return{headline:`Ceque ${cq}`,facts:[`Ceque : ${cq}`]};}}
];

/* ==================== SCORES PAR SCIENCE ==================== */
const TAROT_SCORES={'Le Soleil':95,'Le Monde':92,'L\'Étoile':90,'La Tempérance':85,'La Force':80,'L\'Impératrice':82,'Le Chariot':78,'L\'Amoureux':72,'Le Bateleur':70,'La Justice':68,'Le Jugement':65,'La Papesse':62,'L\'Empereur':60,'Le Pape':58,'La Roue de Fortune':55,'Le Mat':53,'L\'Hermite':45,'Le Pendu':40,'Le Diable':30,'La Tour':25,'L\'Arcane sans nom':35,'La Lune':38};
const RUNE_SCORES={'Fehu':80,'Uruz':70,'Thurisaz':40,'Ansuz':65,'Raidho':60,'Kenaz':65,'Gebo':75,'Wunjo':88,'Hagalaz':25,'Nauthiz':35,'Isa':30,'Jera':78,'Eihwaz':60,'Perthro':48,'Algiz':72,'Sowilo':90,'Tiwaz':65,'Berkano':75,'Ehwaz':68,'Mannaz':55,'Laguz':58,'Ingwaz':62,'Dagaz':82,'Othala':70};
const GEO_SCORES={'Via':65,'Cauda Draconis':40,'Puer':55,'Fortuna Minor':70,'Puella':78,'Amissio':35,'Carcer':30,'Coniunctio':75,'Acquisitio':82,'Rubeus':40,'Laetitia':85,'Caput Draconis':75,'Tristitia':35,'Fortuna Maior':88,'Albus':75,'Populus':55};
const YJ_SCORES={1:85,2:70,3:35,4:40,5:50,6:30,7:65,8:70,9:55,10:60,11:88,12:30,13:80,14:82,15:60,16:75,17:65,18:40,19:70,20:55,21:48,22:60,23:25,24:55,25:65,26:58,27:60,28:35,29:30,30:68,31:70,32:75,33:55,34:80,35:78,36:40,37:70,38:40,39:30,40:65,41:50,42:78,43:75,44:35,45:60,46:70,47:35,48:70,49:60,50:80,51:55,52:50,53:62,54:45,55:72,56:55,57:58,58:75,59:50,60:45,61:75,62:60,63:70,64:55};

/* ==================== MESURE / VALIDATION ==================== */
/* Aucune tradition ne reçoit de score prédictif fabriqué.
   Un taux n'existe que si l'utilisateur a validé des prévisions archivées avant les faits. */
function computeScienceValidation(sci,c,p,k,date){
 const history=state.report&&Array.isArray(state.report.validationHistory)?state.report.validationHistory:[];
 const rows=history.filter(x=>x&&x.scienceId===sci.id&&x.prospective===true&&x.date===dateKey(date)&&['confirme','infirme','partiel'].includes(x.result));
 if(!rows.length)return null;
 return Math.round(rows.reduce((sum,x)=>sum+(x.result==='confirme'?1:x.result==='partiel'?.5:0),0)/rows.length*100);
}
function scoreTier(s){return s==null?'neutral':(s>=65?'high':(s>=45?'med':'low'));}
function scoreEmoji(s){return s==null?'·':s>=65?'🟢':s>=45?'🟡':'🔴';}
function scoreLabel(s){return s==null?'Pas encore mesuré':s>=65?'Plus de confirmations':s>=45?'Résultats partagés':'Plus d’infirmations';}
const _dayValidationCache={};
function clearDayValidationCache(){for(const k in _dayValidationCache)delete _dayValidationCache[k];}
function getDayValidation(date){
 const sels=getSciencesSelected(),key=dateKey(date)+':'+sels.map(x=>x.id).join(',');
 if(Object.prototype.hasOwnProperty.call(_dayValidationCache,key))return _dayValidationCache[key];
 const vals=sels.map(sc=>computeScienceValidation(sc,state.calc,state.profile,state.picks,date)).filter(v=>v!==null);
 return _dayValidationCache[key]=vals.length?Math.round(vals.reduce((a,b)=>a+b,0)/vals.length):null;
}

/* ==================== STATE ==================== */
const state={
  currentSlide:0,currentView:'wizard',
  profile:{},picks:{tarot:[],rune:null,yijing:null,geo:null,images:{}},
  calc:null,report:null,
  reportPeriod:'day',reportDate:new Date(),
  detailSci:null,detailPeriod:'day',
  selectedSciences:null,
  calendarMonth:new Date().getMonth(),calendarYear:new Date().getFullYear(),
  knownDays:{},retroResults:null
};
const blankPicks=()=>({tarot:[],rune:null,yijing:null,geo:null,images:{}});
const saveProfile=()=>writeLS(LS.profile,state.profile);
const savePicks=()=>writeLS(LS.picks,state.picks);
const saveSel=()=>writeLS(LS.sel,state.selectedSciences);
function getSelected(){if(!state.selectedSciences)state.selectedSciences=SCIENCES.filter(s=>s.on).map(s=>s.id);return state.selectedSciences;}
function getSciencesSelected(){const ids=new Set(getSelected());return SCIENCES.filter(s=>ids.has(s.id));}

function normalizePicks(){
 if(Array.isArray(state.picks.tarot)){
  state.picks.tarot=state.picks.tarot.map(t=>{
   if(!t)return null;
   if(Array.isArray(t.card))return{pos:t.pos||'',card:t.card,rev:!!t.rev};
   if(t.name){const found=TAROT.find(x=>x[0]===t.name);return{pos:t.pos||'',card:found||[t.name,'—'],rev:!!t.rev};}
   return null;
  }).filter(Boolean);
 }
 if(state.picks.rune&&typeof state.picks.rune==='object'&&!Array.isArray(state.picks.rune)){
  const r=state.picks.rune;
  state.picks.rune=r.name?[r.name,r.kwUp||'—']:null;
 }
 savePicks();
}

/* ==================== COMPUTE ALL ==================== */
function computeAll(){
 const p=state.profile,E=[],W=[];
 const y=parseInt(p.by,10),m=parseInt(p.bm,10),d=parseInt(p.bd,10);
 const nowY=new Date().getFullYear();
 if(!(y>=1900&&y<=nowY))E.push('Année de naissance invalide.');
 else if(!(m>=1&&m<=12))E.push('Mois invalide.');
 else if(!(d>=1&&d<=31))E.push('Jour invalide.');
 else{const t=new Date(Date.UTC(y,m-1,d));if(!(t.getUTCFullYear()===y&&t.getUTCMonth()===m-1&&t.getUTCDate()===d))E.push('Ce jour n\'existe pas.');}
 const unknown=!!p.timeUnknown;let h=12,mi=0;
 if(!unknown){h=parseInt(p.bh,10);mi=parseInt(p.bmin,10);if(!(h>=0&&h<=23)||!(mi>=0&&mi<=59))E.push('Heure invalide.');}
 if(E.length)return{ok:false,errors:E};
 let off=null,offSrc='';
 const man=String(p.tzManual==null?'':p.tzManual).trim();
 if(man!==''){const v=parseFloat(man.replace(',','.'));if(isNaN(v)||v<-12||v>14)E.push('Décalage UTC invalide.');else{off=Math.round(v*60);offSrc='UTC'+(v>=0?'+':'')+v;}}
 else if(p.tz&&String(p.tz).trim()){const o=tzOffsetMinutes(String(p.tz).trim(),y,m,d,h,mi);if(o==null)E.push('Fuseau inconnu.');else{off=o;offSrc=String(p.tz).trim();}}
 if(off===null&&!E.length){if(unknown){off=0;offSrc='UT';}else E.push('Renseignez le fuseau horaire.');}
 const lat=parseFloat(String(p.lat==null?'':p.lat).replace(',','.')),lon=parseFloat(String(p.lon==null?'':p.lon).replace(',','.'));
 const hasCoord=!isNaN(lat)&&!isNaN(lon)&&Math.abs(lat)<=89&&Math.abs(lon)<=180;
 if(!unknown&&!hasCoord)E.push('Latitude et longitude requises.');
 if(E.length)return{ok:false,errors:E};
 const jd=jdFromUTC(y,m,d,h,mi,off);const pos=planetsAt(jd);
 let asc=null,mc=null;if(!unknown&&hasCoord){const a=ascMc(jd,lat,lon);asc=a.asc;mc=a.mc;}
 const ascStart=asc!=null?Math.floor(asc/30)*30:null;
 const BODIES=[['Soleil','☉'],['Lune','☽'],['Mercure','☿'],['Vénus','♀'],['Mars','♂'],['Jupiter','♃'],['Saturne','♄'],['Uranus','♅'],['Neptune','♆'],['Nœud Nord','☊']];
 const bodies=BODIES.map(([name,glyph])=>{const l=pos[name];return{name,glyph,lon:l,sign:signOf(l),deg:fmtDeg(l),house:ascStart!=null?Math.floor(rev(l-ascStart)/30)+1:null};});
 const ayan=23.8531+0.013969*((jd-2451545)/365.25);
 const sid={ayan,sun:signOf(rev(pos['Soleil']-ayan)),moon:signOf(rev(pos['Lune']-ayan)),nak:NAK[Math.floor(rev(pos['Lune']-ayan)/(360/27))],asc:asc!=null?signOf(rev(asc-ayan)):null};
 const phase=moonPhase(pos['Soleil'],pos['Lune']);
 const now=new Date();
 const num=numerology(p,y,m,d,now);
 const bz=bazi(y,m,d,h,!unknown,pos['Soleil']);
 const gender=p.genre==='Femme'?'F':p.genre==='Homme'?'M':(p.kuaMode==='F'?'F':'M');
 const kua=kuaNumber(bz.baziYear,gender);
 const age=now.getFullYear()-y-((now.getMonth()+1<m||(now.getMonth()+1===m&&now.getDate()<d))?1:0);
 return{ok:true,warnings:W,birth:{y,m,d,h,mi,off,offSrc,jd,timeKnown:!unknown,lat:hasCoord?lat:null,lon:hasCoord?lon:null,long:d+' '+MONTHS_FR[m-1]+' '+y,age,utc:new Date(Math.round((jd-2440587.5)*86400000)).toISOString().replace('T',' ').slice(0,16)+' UT'},bodies,asc,mc,ascSign:asc!=null?signOf(asc):null,mcSign:mc!=null?signOf(mc):null,sid,phase,num,bazi:bz,kua};
}
function sunSign(c){return c.bodies[0].sign;}
function moonSign(c){return c.bodies[1].sign;}

/* ==================== AI MODULE ==================== */
const AI=(function(){
 let keys=[];let cfg={endpoint:AGNES_BASE+'/chat/completions',model:AGNES_MODEL,modelFallback:AGNES_MODEL_FB,defaultRpm:10};let rr=0;
 const setKeys=a=>{keys=(a||[]).filter(k=>k&&k.key).map(k=>({key:k.key,rpm:k.rpm||cfg.defaultRpm,hits:[]}));};
 const setCfg=c=>{cfg=Object.assign(cfg,c||{});};
 const hasKeys=()=>keys.length>0,count=()=>keys.length;
 const concurrency=()=>{if(!keys.length)return 1;const t=keys.reduce((s,k)=>s+k.rpm,0);return Math.max(1,Math.min(4,Math.floor(t/3)));};
 async function acquire(){const dl=Date.now()+120000;while(Date.now()<dl){const now=Date.now();const av=keys.filter(k=>{k.hits=k.hits.filter(t=>now-t<60000);return k.hits.length<k.rpm;});if(av.length){const k=av[rr++%av.length];k.hits.push(Date.now());return k;}await sleep(700);}return null;}
 async function fetchOnce(model,prompt,opts,slot){
  const ctl=new AbortController();const timeoutMs=opts.timeoutMs||120000;
  const to=setTimeout(()=>ctl.abort(),timeoutMs);
  try{
   const res=await fetch(cfg.endpoint,{method:'POST',signal:ctl.signal,headers:{'Content-Type':'application/json','Authorization':'Bearer '+slot.key},body:JSON.stringify({model,temperature:opts.temperature!=null?opts.temperature:0.85,max_tokens:opts.maxTokens||900,messages:[{role:'system',content:opts.system||''},{role:'user',content:prompt}]})});
   if(!res.ok){const status=res.status;let detail='';try{const ej=await res.json();detail=(ej.error&& (ej.error.message||ej.error.code))||ej.message||'';}catch(e){}if(status===429)throw new Error('429 : quota ou limite RPM atteinte.');if(status===401||status===403)throw new Error('Clé API refusée (HTTP '+status+'). Vérifiez la clé et ses droits.');if(status===404)throw new Error('Modèle ou endpoint introuvable (HTTP 404). Le modèle de secours sera essayé.');if(status===503)throw new Error('Canal Agnes indisponible (HTTP 503). Réessayez plus tard.');throw new Error('Agnes HTTP '+status+(detail?' : '+String(detail).slice(0,180):''));}
   const j=await res.json();
   const choice=j&&j.choices&&j.choices[0];
   const t=choice&&choice.message&&choice.message.content;
   if(!t)throw new Error('réponse vide');
   return{text:t.trim(),finish:choice.finish_reason||'stop'};
  }finally{clearTimeout(to);}
 }
 async function chat(prompt,opts){
  opts=opts||{};if(!keys.length)throw new Error('Aucune clé Agnes configurée.');
  let last=null;
  const models=[cfg.model];if(cfg.modelFallback&&cfg.modelFallback!==cfg.model)models.push(cfg.modelFallback);
  for(const model of models)for(let a=0;a<2;a++){
   const slot=await acquire();if(!slot)throw new Error('Quota RPM dépassé.');
   try{
    const r=await fetchOnce(model,prompt,opts,slot);
    if(r.finish==='length'&&opts.maxTokens&&opts.maxTokens<2000){opts.maxTokens=Math.min(2000,Math.round(opts.maxTokens*1.5));await sleep(800);continue;}
    return r.text;
   }catch(e){
    last=e;
    const msg=String(e&&e.message||e);
    if(/401|403|Clé API refusée/i.test(msg))throw e;
    if(/404|introuvable/i.test(msg))break; // essayer directement le modèle de secours
    if(/429/.test(msg))await sleep(2500+Math.random()*1500);
    else if(/503|502|500|AbortError|délai|timeout/i.test(msg))await sleep(1200+Math.random()*800);
    else if(a===0)await sleep(700);
    else break;
   }
  }
  throw last||new Error('Erreur API.');
 }
 async function test(key){try{const r=await fetchOnce(cfg.model,'Réponds : OK',{maxTokens:8,temperature:0,system:'Un mot.'},{key});return{ok:true,msg:r.text};}catch(e){return{ok:false,msg:e.name==='AbortError'?'délai':e.message};}}
 return{setKeys,setCfg,hasKeys,count,concurrency,chat,test};
})();

/* ==================== PROMPTS ==================== */
const SYS_SCI=`Tu es un comité éditorial interdisciplinaire réunissant historiens des religions, astronomes, historiens des sciences, statisticiens, anthropologues, psychologues universitaires et spécialistes des traditions étudiées. Tu écris en français avec précision, pédagogie et profondeur. Tu dois distinguer systématiquement : (A) données directement calculées ou renseignées, (B) cadre historique et méthode de la discipline, (C) interprétation interne à la tradition, (D) hypothèses personnelles et conseils. Ne transforme jamais une tradition symbolique en science expérimentale. N'invente aucune source, donnée, mesure, causalité ou validation. Signale explicitement les limites, incertitudes, biais et données manquantes. Pas de diagnostic médical ou psychologique, pas de conseil thérapeutique, pas de prédiction certaine, pas d'estimation de durée de vie. Pour les domaines de santé, rappelle que le contenu n'est pas un avis médical. Pour la psychologie, distingue modèle théorique, outil de réflexion et instrument psychométrique validé. Pour l'astronomie, distingue calcul céleste et interprétation astrologique. Évite les banalités et les répétitions : chaque paragraphe doit apporter une information précise. Réponds uniquement par un objet JSON valide, sans markdown.`;

const DOMAIN_METHODS={
 Astres:`Cadre d'expertise : séparer astronomie observationnelle et astrologies historiques. Une position planétaire est un résultat astronomique dépendant d'une éphéméride, d'une heure, d'un lieu, d'un système de coordonnées et d'une précision de calcul. Les significations zodiacales, maisons, décans et correspondances relèvent d'écoles historiques et de conventions symboliques ; elles ne démontrent pas une influence causale sur la personnalité ou les événements. Vérifier cohérence des dates, fuseaux, coordonnées et systèmes avant toute interprétation.`,
 Nombres:`Cadre d'expertise : décrire l'algorithme exact de réduction, les conventions de translittération et les choix de calcul. La numérologie est une tradition symbolique/historique, non une méthode statistique prédictive validée. Ne présenter aucun nombre comme mesure objective d'une personnalité ou d'un destin. Signaler que des conventions différentes produisent des résultats différents.`,
 Oracles:`Cadre d'expertise : traiter le tirage comme un dispositif interprétatif et narratif issu d'une tradition documentée. Décrire le symbole, sa place dans le tirage, les variantes historiques et la part d'aléatoire. Ne pas transformer les cartes, runes ou figures en preuve ni en prédiction factuelle. Proposer des questions réflexives plutôt que des annonces d'événements.`,
 Occulte:`Cadre d'expertise : contextualiser les concepts dans leur histoire religieuse, philosophique et ésotérique, en distinguant textes, écoles et réinterprétations modernes. Ne pas présenter les correspondances métaphysiques comme mécanismes physiques démontrés. Identifier les anachronismes et les variantes lorsqu'ils sont pertinents.`,
 Corps:`Cadre d'expertise : priorité à la sécurité et à la distinction entre histoire des pratiques, hypothèses traditionnelles et médecine fondée sur les preuves. Ne déduire aucune pathologie, constitution médicale ou traitement. L'Ayurvéda et la MTC sont des systèmes médicaux traditionnels complexes, mais leurs concepts ne se confondent pas avec les catégories biomédicales. Les biorythmes n'ont pas de validation prédictive robuste. La kinésiologie appliquée n'est pas un outil diagnostique fiable. Les pierres et huiles ne doivent pas être créditées d'effets thérapeutiques non établis ; signaler les risques d'huiles essentielles et les contre-indications générales sans prescrire.`,
 Psyché:`Cadre d'expertise : distinguer histoire des idées, modèles cliniques, concepts interprétatifs et psychométrie. Les archétypes jungiens sont un cadre théorique/historique, pas des catégories diagnostiques. L'ennéagramme n'est pas un diagnostic et sa validité psychométrique est discutée. L'analyse des rêves est exploratoire et dépend du vécu du rêveur ; aucune interprétation universelle ne peut être affirmée. Ne jamais inférer un trouble ou un trait stable à partir d'un questionnaire bref.`,
 Nature:`Cadre d'expertise : présenter les traditions comme des systèmes culturels et symboliques situés, en évitant d'homogénéiser des peuples ou pratiques. Distinguer sources historiques, transmission contemporaine et reconstruction néo-traditionnelle. Les correspondances animales, végétales ou calendaires sont des significations culturelles, pas des diagnostics écologiques ou des prédictions. Respecter le contexte culturel et signaler les incertitudes d'attribution.`
};
const SCIENCE_METHODS={
 astro:`Astrologie occidentale : expliciter tropical/sidéral, maisons, aspects et orbites si disponibles. Les calculs de positions ne valident pas l'interprétation astrologique.`,
 hellenistic:`Astrologie hellénistique : contextualiser secte, maisons entières, maîtres, lots et témoignages antiques ; ne pas mélanger sans le dire les écoles hellénistique et moderne.`,
 lunar:`Phase lunaire : l'illumination et la phase sont astronomiques ; les effets comportementaux attribués à la Lune ne sont pas établis par ce seul calcul.`,
 bio:`Biorythme : préciser qu'il s'agit de sinusoïdes conventionnelles de 23, 28 et 33 jours, sans valeur diagnostique ni pouvoir prédictif robuste.`,
 ayurveda:`Ayurvéda : doshas et prakriti sont des catégories internes à la tradition. Un auto-questionnaire bref ne permet pas de déterminer un état médical ni une constitution avec fiabilité.`,
 mtc:`MTC : yin-yang, qi et cinq phases appartiennent à un modèle traditionnel ; ne pas les assimiler directement à des organes ou mécanismes biomédicaux.`,
 kine:`Kinésiologie : les réponses déclaratives peuvent nourrir une réflexion sur le ressenti ; le test musculaire n'est pas une méthode diagnostique validée.`,
 jung:`Jung : présenter les archétypes comme concepts de psychologie analytique et d'histoire des idées, non comme structures mesurables établies chez chaque individu.`,
 enneagram:`Ennéagramme : typologie de développement personnel à validité scientifique discutée ; ne pas attribuer un type stable sans instrument rigoureux.`,
 oniro:`Onirocritique : replacer les images de rêve dans l'histoire des traditions et dans le récit personnel ; aucune symbolique universelle ne doit être imposée.`,
 tarot:`Tarot : préciser la tradition du jeu, la position de chaque carte et les associations retenues ; la lecture est symbolique et réflexive, pas prédictive.`,
 yijing:`Yi Jing : distinguer le texte classique, les commentaires historiques, la méthode de tirage et l'interprétation contemporaine ; expliquer les lignes mutantes si elles existent.`,
 geomancy:`Géomancie : décrire les figures et leur place dans la méthode ; ne pas présenter la figure comme mesure du réel.`,
 rune:`Runes : distinguer alphabet historique, usages épigraphiques et interprétations divinatoires modernes.`,
 num:`Numérologie : indiquer les conventions pythagoriciennes et le caractère symbolique des réductions.`,
 numChald:`Numérologie chaldéenne : signaler les variantes de correspondance lettres/nombres et les choix de translittération.`,
 gematria:`Gématrie : une somme dépend de l'alphabet, de l'orthographe et de la méthode retenue ; ne pas transposer mécaniquement les valeurs hébraïques à d'autres écritures.`
};

const PERIOD_LABEL={day:'aujourd’hui',tomorrow:'demain',week:'cette semaine',month:'ce mois',quarter:'ce trimestre',year:'cette année',decade:'ces 5 prochaines années',life:'la vie entière'};
const PERIOD_TOKENS={day:900,tomorrow:900,week:1000,month:1100,quarter:1200,year:1300,decade:1500,life:1700};
const PERIOD_TIMEOUT={day:90000,tomorrow:90000,week:100000,month:110000,quarter:120000,year:130000,decade:150000,life:170000};
const PERIOD_LENGTH={day:'1 paragraphe',tomorrow:'1 paragraphe',week:'2 paragraphes',month:'2 paragraphes',quarter:'3 paragraphes',year:'3 paragraphes',decade:'3 paragraphes',life:'4 paragraphes'};

function buildPrompt(sci,period,facts,date,ctx){
 const length=PERIOD_LENGTH[period]||'2 paragraphes';
 const domain=DOMAIN_METHODS[sci.cat]||'Situer historiquement la discipline, expliciter sa méthode et ses limites.';
 const specific=SCIENCE_METHODS[sci.id]||'';
 return `DISCIPLINE : ${sci.name} (famille : ${sci.cat})\nPÉRIODE : ${PERIOD_LABEL[period]} (${frDate(date)})\nPERSONNE : ${ctx.prenom}, ${ctx.age} ans${ctx.question?' — question : « '+ctx.question+' »':''}\n\nPRÉSENTATION HISTORIQUE : ${sci.intro}\nPRINCIPES FOURNIS PAR L'APPLICATION : ${(sci.principles||[]).join(' ; ')}\nCADRE MÉTHODOLOGIQUE À RESPECTER : ${domain}\nPRÉCISION PROPRE À CETTE DISCIPLINE : ${specific}\n\nDONNÉES CALCULÉES OU DÉCLARÉES (ne rien ajouter) :\n${facts.map(f=>'• '+f).join('\n')}\n\nMISSION : Produis une analyse de niveau expert mais lisible, en ${length} minimum, sans remplir artificiellement. Décris d'abord ce que les données permettent réellement d'affirmer. Situe ensuite la notion dans l'histoire et la méthode de cette discipline. Interprète les éléments uniquement dans le cadre de la tradition, en explicitant les correspondances précises avec les données fournies. Termine par des pistes concrètes de réflexion adaptées à la période, sans prédire des événements. Ne répète pas le même conseil sous plusieurs formes.\n\nFORMAT JSON STRICT :\n{"headline":"titre précis","cadre":"nature et statut de la discipline","donnees":"lecture factuelle des données fournies","interpretation":"interprétation interne à la tradition, argumentée et contextualisée","limites":"limites, incertitudes et ce qu'on ne peut pas conclure","applications":["piste concrète 1","piste concrète 2"],"lecture":"synthèse rédigée, claire et approfondie","actions":["action 1","action 2"]}`;
}

async function generateOne(sci,period,date){
 const comp=sci.compute(period,state.calc,state.profile,state.picks,date);
 const prompt=buildPrompt(sci,period,comp.facts,date,{prenom:state.profile.prenomUsuel||'vous',age:state.calc.birth.age,question:state.profile.question});
 let last=null;
 for(let attempt=0;attempt<3;attempt++){
  try{
   const out=await AI.chat(prompt,{maxTokens:PERIOD_TOKENS[period]||1000,timeoutMs:PERIOD_TIMEOUT[period]||120000,temperature:0.85,system:SYS_SCI});
   const j=robustParseJSON(out);
   if(j&&j.headline&&j.lecture){
    return{headline:String(j.headline).slice(0,160),cadre:String(j.cadre||''),donnees:String(j.donnees||''),interpretation:String(j.interpretation||''),limites:String(j.limites||''),applications:safeTextList(j.applications,4),lecture:String(j.lecture),actions:safeTextList(j.actions,4),facts:comp.facts,generatedAt:Date.now()};
   }
   if(attempt<2){await sleep(1200);continue;}
   throw new Error('JSON invalide');
  }catch(e){last=e;if(attempt<2)await sleep(1500*(attempt+1));}
 }
 throw last||new Error('échec');
}

function normalizeGrandBilan(v){
 if(!v||typeof v!=='object')return null;
 return {titre:String(v.titre||'Bilan transversal'),periode:String(v.periode||''),corpus:String(v.corpus||''),resume:String(v.resume||v.fil||''),convergences:safeTextList(v.convergences,6),divergences:safeTextList(v.divergences,6),analyse:String(v.analyse||''),solidite:String(v.solidite||''),questions:safeTextList(v.questions,5),plan:{court:String(v.plan&&v.plan.court||''),moyen:String(v.plan&&v.plan.moyen||''),long:String(v.plan&&v.plan.long||'')},conclusion:String(v.conclusion||''),fallback:!!v.fallback,generatedAt:Number(v.generatedAt)||Date.now(),dateCount:Number(v.dateCount)||0,scienceCount:Number(v.scienceCount)||0};
}
function collectGrandCorpus(){
 ensureReportShape();saveActiveArchive();
 const all=[];const seen=new Set();
 Object.entries(state.report.archive||{}).sort((a,b)=>a[0].localeCompare(b[0])).forEach(([date,snap])=>{
  Object.entries(snap.sciences||{}).forEach(([id,e])=>{
   const a=(e&&e.periods&&e.periods.day)||(e&&e.annual)||(e&&e.periods&&e.periods.week)||(e&&e.periods&&e.periods.month);
   if(!a||!a.lecture)return;
   const key=date+'|'+id;if(seen.has(key))return;seen.add(key);
   const sci=SCIENCES.find(x=>x.id===id);
   all.push({date,id,name:sci?sci.name:id,cat:sci?sci.cat:'Autre',headline:a.headline||'',cadre:a.cadre||'',donnees:a.donnees||'',interpretation:a.interpretation||'',limites:a.limites||'',lecture:a.lecture||'',actions:safeTextList(a.actions,3)});
  });
 });
 // Include active data if a legacy archive was not yet written.
 Object.entries(state.report.sciences||{}).forEach(([id,e])=>{const a=e&&(e.periods&&e.periods.day||e.annual);if(!a||!a.lecture)return;const key=(state.report.date||dateKey(state.reportDate))+'|'+id;if(seen.has(key))return;const sci=SCIENCES.find(x=>x.id===id);all.push({date:state.report.date||dateKey(state.reportDate),id,name:sci?sci.name:id,cat:sci?sci.cat:'Autre',headline:a.headline||'',cadre:a.cadre||'',donnees:a.donnees||'',interpretation:a.interpretation||'',limites:a.limites||'',lecture:a.lecture||'',actions:safeTextList(a.actions,3)});});
 return all.sort((a,b)=>a.date.localeCompare(b.date));
}
function fallbackGrandBilan(corpus){
 const cats=[...new Set(corpus.map(x=>x.cat))];
 return normalizeGrandBilan({
  titre:`Lecture transversale du dossier`,corpus:`Synthèse de secours structurée à partir des archives disponibles.`,
  resume:`Le dossier rassemble ${corpus.length} analyses issues de ${new Set(corpus.map(x=>x.date)).size} date(s) et de ${cats.length} famille(s) de disciplines. Il s'agit d'un ensemble de lectures hétérogènes : leurs résultats ne sont pas directement additionnables et ne constituent pas une preuve convergente.`,
  convergences:[`Les disciplines proposent des langages différents pour organiser la réflexion.`,`Les données biographiques et les tirages symboliques n'ont pas le même statut épistémique.`],
  divergences:[`Les méthodes de calcul, les conventions historiques et les interprétations ne sont pas comparables sur une échelle commune.`],
  analyse:`Une lecture transversale rigoureuse doit commencer par séparer les données vérifiables, les réponses déclaratives et les significations propres à chaque tradition. Les répétitions de thèmes peuvent fournir des pistes de réflexion, mais elles ne démontrent ni causalité ni capacité prédictive. Le dossier ne permet pas d'établir un profil scientifique global de la personne.`,
  solidite:`Les calculs explicitement reproductibles peuvent être contrôlés selon leurs paramètres. Les significations symboliques restent des interprétations internes aux traditions. Les conseils issus de ces lectures sont des propositions de réflexion et non des conclusions expérimentales.`,
  questions:[`Quels éléments du dossier correspondent à des faits vérifiables ?`,`Quelles interprétations résonnent avec l'expérience réelle, et lesquelles ne lui correspondent pas ?`,`Quelles conclusions seraient différentes si l'on changeait de méthode ou de tradition ?`],
  plan:{court:`Choisir une seule piste concrète et observer ce qui se passe sans chercher à confirmer le tirage.`,moyen:`Tenir un journal daté distinguant faits observés, ressentis et interprétations.`,long:`Revenir périodiquement sur les hypothèses et noter aussi les éléments qui les contredisent.`},
  conclusion:`Ce dossier est un outil de mise en perspective culturelle et personnelle. Sa valeur dépend de la qualité des données, de la transparence des méthodes et de la liberté de confronter les interprétations à l'expérience.`,
  fallback:true,dateCount:new Set(corpus.map(x=>x.date)).size,scienceCount:new Set(corpus.map(x=>x.id)).size
 });
}
async function generateGrandBilan(){
 const corpus=collectGrandCorpus();
 if(!corpus.length)throw new Error('Aucune analyse archivée ne permet de construire le bilan transversal.');
 const analyzed=corpus.slice(-48);
 const compact=analyzed.map(x=>`DATE ${x.date} | ${x.cat} — ${x.name}\nDonnées : ${x.donnees||x.headline}\nCadre : ${x.cadre}\nInterprétation : ${(x.interpretation||x.lecture).slice(0,850)}\nLimites : ${x.limites}`).join('\n\n');
 const prompt=`Tu dois rédiger le BILAN DES BILANS d'EsotherIA. Ce document est un rapport transversal et longitudinal, PAS une synthèse du jour. Il s'appuie sur ${analyzed.length} analyses effectivement transmises, ${new Set(analyzed.map(x=>x.date)).size} dates et ${new Set(analyzed.map(x=>x.id)).size} disciplines. Le dossier contient ${corpus.length} analyses archivées au total ; le corpus transmis privilégie les 48 plus récentes.\n\nCORPUS ARCHIVÉ :\n${compact}\n\nMÉTHODE OBLIGATOIRE : 1. Distingue les faits/calculs reproductibles, les déclarations de la personne, les modèles théoriques et les traditions symboliques. 2. N'appelle pas convergence scientifique la répétition d'un motif entre traditions non indépendantes. 3. Cherche les thèmes communs, mais rapporte aussi les contradictions et les absences. 4. N'infère ni personnalité clinique, ni destin, ni événement futur. 5. Explique le degré de solidité selon la nature de chaque source. 6. Rends le texte compréhensible pour une personne sans formation scientifique. 7. Ne prétends pas analyser une période ou une date qui n'apparaît pas dans le corpus.\n\nLe bilan doit contenir : résumé exécutif (5 à 8 phrases), convergences prudentes, divergences/contradictions, analyse transversale détaillée, évaluation de la solidité et des limites, questions utiles, plan d'action court/moyen/long terme et conclusion. Ne répète pas la synthèse du jour.\n\nJSON STRICT : {"titre":"...","periode":"période réellement couverte","corpus":"description du corpus","resume":"...","convergences":["..."],"divergences":["..."],"analyse":"...","solidite":"...","questions":["..."],"plan":{"court":"...","moyen":"...","long":"..."},"conclusion":"..."}`;
 let parsed=null;
 try{
  const out=await AI.chat(prompt,{maxTokens:3000,timeoutMs:180000,temperature:.35,system:SYS_SCI});
  parsed=normalizeGrandBilan(robustParseJSON(out));
  if(!parsed||!parsed.resume||!parsed.analyse||!parsed.conclusion)throw new Error('Réponse de bilan transversal incomplète.');
 }catch(err){
  parsed=fallbackGrandBilan(corpus);
  parsed.corpus='Rapport de secours : génération IA indisponible ('+String(err.message||err).slice(0,180)+').';
 }
 parsed.dateCount=new Set(analyzed.map(x=>x.date)).size;parsed.scienceCount=new Set(analyzed.map(x=>x.id)).size;parsed.generatedAt=Date.now();
 state.report.grandBilan=parsed;writeLS(LS.report,state.report);return parsed;
}

function fallbackSynthesis(entries,period){
 const headlines=entries.map(e=>{const a=period&&e.periods&&e.periods[period]||(period==='day'||!period?e.annual:null);return a&&a.headline;}).filter(Boolean);
 const stopWords=new Set(['le','la','les','un','une','des','de','du','et','ou','en','à','au','aux','ce','cette','ces','son','sa','ses','sur','par','pour','dans','avec','sans','est','sont']);
 const words=headlines.join(' ').toLowerCase().split(/[^a-zéèêàâîôûç]+/).filter(w=>w.length>3&&!stopWords.has(w));
 const counts={};words.forEach(w=>counts[w]=(counts[w]||0)+1);
 const themes=Object.entries(counts).sort((a,b)=>b[1]-a[1]).slice(0,5).map(([w])=>w.charAt(0).toUpperCase()+w.slice(1));
 while(themes.length<3)themes.push('À explorer');
 return{
  fil:`Plusieurs traditions convergent : ${headlines.slice(0,3).join(', ')}. Ce n'est pas un hasard, c'est un motif à reconnaître.`,
  themes,
  plan:{mois:['Choisir une chose concrète à cultiver ce mois-ci.','Revoir les traditions qui vous ont le plus parlé.','Écrire une page de journal par semaine.'],semaine:['Trois priorités, pas plus.','Un moment dehors chaque jour.','Un carnet pour noter ce qui résonne.'],jour:['Faire la chose la plus importante avant midi.','Trois respirations conscientes.','Relire une synthèse d\'une tradition.']},
  mantra:'Je fais moins, mais je fais mieux.',fallback:true
 };
}

// Normalise les réponses IA et les anciens dossiers : une liste peut avoir été
// renvoyée sous forme d'objet {0:...,1:...}, de texte ou d'une valeur nulle.
function safeTextList(value,limit=5){
 let items=[];
 if(Array.isArray(value))items=value;
 else if(value&&typeof value==='object')items=Object.keys(value).sort((a,b)=>String(a).localeCompare(String(b),'fr',{numeric:true})).map(k=>value[k]);
 else if(typeof value==='string')items=value.split(/\r?\n|\s*;\s*/);
 else if(value!=null)items=[value];
 return items.map(x=>typeof x==='string'?x:(x&&typeof x==='object'?(x.text||x.label||x.value||''):String(x))).map(x=>String(x||'').trim()).filter(Boolean).slice(0,limit);
}
function normalizeSynthesis(value){
 if(!value||typeof value!=='object')return null;
 const plan=value.plan&&typeof value.plan==='object'?value.plan:{};
 return {
  fil:String(value.fil||value.summary||value.resume||'Synthèse indisponible.'),
  themes:safeTextList(value.themes||value.thematiques,5),
  plan:{
   mois:safeTextList(plan.mois??plan.month??plan.monthly??value.mois,3),
   semaine:safeTextList(plan.semaine??plan.week??plan.weekly??value.semaine,3),
   jour:safeTextList(plan.jour??plan.day??plan.daily??value.jour,3)
  },
  mantra:String(value.mantra||value.conclusion||''),
  fallback:!!value.fallback
 };
}
async function generateSynthesis(period,date,entries){
 const lines=entries.map(sc=>{const e=state.report.sciences[sc.id];const a=e&&((e.periods&&e.periods[period])||(period==='day'?e.annual:null));return a?`${sc.name} : ${a.headline}\n${a.lecture||''}`:'';}).filter(Boolean).join('\n\n');
 const prompt=`Voici les ${entries.length} résumés produits par différentes traditions pour une même personne, période : ${PERIOD_LABEL[period]} (${frDate(date)}).\n\n${lines}\n\nMISSION : Écris une synthèse propre à cette période, et non un bilan longitudinal. Identifie 3 à 5 thèmes présents dans les textes fournis, sans inventer de convergence ni prétendre à une validation scientifique. Distingue les constats, les interprétations symboliques et les conseils. Donne un fil rouge argumenté (2 à 4 phrases), un plan d’action en trois horizons et une formule finale facultative. Les trois listes du plan doivent impérativement être des tableaux JSON de chaînes, jamais des objets.\n\nFORMAT OBLIGATOIRE (JSON brut, pas de markdown) :\n{"fil":"...","themes":["...","..."],"plan":{"mois":["..."],"semaine":["..."],"jour":["..."]},"mantra":"..."}`;
 let last=null;
 for(let attempt=0;attempt<3;attempt++){
  try{
   const out=await AI.chat(prompt,{maxTokens:1200,timeoutMs:130000,temperature:0.65,system:SYS_SCI});
   const j=robustParseJSON(out),normalized=normalizeSynthesis(j);
   if(normalized&&normalized.fil&&normalized.themes.length){
    if(!normalized.plan.mois.length&&!normalized.plan.semaine.length&&!normalized.plan.jour.length)throw new Error('Plan de synthèse absent ou invalide');
    return normalized;
   }
   if(attempt<2){await sleep(1200);continue;}
  }catch(e){last=e;if(attempt<2)await sleep(1200*(attempt+1));}
 }
 const fb=fallbackSynthesis(entries,period);
 return normalizeSynthesis(fb)||fb;
}

/* ==================== WIZARD SLIDES ==================== */
const qcm=(f,label,opts,icons)=>`<div class="qcm-group"><label class="form-label">${label}</label>${opts.map((o,i)=>{const v=Array.isArray(o)?o[0]:o,l=Array.isArray(o)?o[1]:o;const ic=icons&&icons[i]?`<span class="ico">${icons[i]}</span>`:'';return `<label class="qcm-item"><input type="radio" data-f="${f}" name="${f}" value="${esc(v)}">${ic}<span>${esc(l)}</span></label>`;}).join('')}</div>`;
const rangeRow=(f,label,def)=>`<div class="range-row"><label for="f-${f}">${label}</label><input type="range" id="f-${f}" data-f="${f}" min="1" max="10" value="${def}" class="range-input"><span class="range-value" id="v-${f}">${def}/10</span></div>`;
const txt=(f,label,ph,opts)=>{opts=opts||{};return `<div class="${opts.col||'col-12'}"><label class="form-label ${opts.req?'req':''}" for="f-${f}">${label}</label><input class="form-control ${opts.cls||''}" id="f-${f}" data-f="${f}" ${opts.type?'type="'+opts.type+'"':''} ${opts.attrs||''} placeholder="${esc(ph||'')}" autocomplete="off">${opts.hint?'<div class="hint">'+opts.hint+'</div>':''}</div>`;};
const imgCard=(v,emoji,url)=>`<div class="img-card" data-val="${esc(v)}"><span class="check"><i class="bi bi-check-lg"></i></span><div class="ph">${emoji}</div><img src="${url}" alt="${esc(v)}" loading="lazy" onerror="this.remove()"><div class="label">${esc(v.split(' (')[0])}</div></div>`;
const previewBox='<div class="preview" data-preview></div>';

const SLIDES=[
{key:'keys',label:'Clés Agnes',build:()=>`
 <h1 class="slide-title">Bienvenue dans EsotherIA</h1>
 <p class="slide-sub"><strong>Aucun mode démo.</strong> Chaque analyse est calculée à partir de vos vraies données, puis rédigée par Agnes. Sans clé Agnes, aucun rapport ne peut être produit.</p>
 <div class="wiz-fact"><span class="ico">🔑</span><div><b>Pourquoi une clé ?</b> Agnes est le moteur IA qui génère les textes. Vos clés restent dans votre navigateur, jamais envoyées ailleurs qu'à l'API Agnes.</div></div>
 <div class="keys-panel mt-3">
  <label class="form-label" for="f-keys">Clés API Agnes (une par ligne)</label>
  <textarea class="form-control" id="f-keys" rows="4" spellcheck="false" placeholder="sk-xxxxxxxxxxxxxxxxxxxxxxxx"></textarea>
  <div class="d-flex align-items-center gap-2 mt-3 flex-wrap">
   <span class="pill pill-soft" id="keysCount"><i class="bi bi-key"></i> 0 clé</span>
   <span class="pill"><i class="bi bi-speedometer2"></i> RPM</span>
   <input type="number" id="f-default-rpm" class="form-control form-control-sm" style="width:80px" min="1" max="120" value="10">
   <button class="btn-cyan-soft ms-auto" id="btnTestKey"><i class="bi bi-plug"></i> Tester</button>
   <button class="btn-cyan-soft" id="btnClearKeys"><i class="bi bi-x-lg"></i> Vider</button>
  </div>
 </div>`,validate:()=>{const n=parseKeys($('#f-keys').value).length;if(n===0){toast('Sans clé Agnes, aucune analyse ne peut être générée.','err');return false;}return true;}},
{key:'ident',label:'Identité',build:()=>`
 <h1 class="slide-title">Qui êtes-vous ?</h1>
 <p class="slide-sub">La numérologie utilise vos prénoms et nom de naissance exacts.</p>
 <div class="row g-3">
  ${txt('prenomUsuel','Prénom usuel','Ex. Camille',{req:1,col:'col-md-6',attrs:'maxlength="40"'})}
  ${txt('nomUsuel','Nom d\'usage','',{col:'col-md-6',attrs:'maxlength="60"'})}
  ${txt('prenoms','Tous vos prénoms de naissance','Ex. Camille Marie Louise',{req:1,col:'col-md-6',attrs:'maxlength="100"'})}
  ${txt('nomNaissance','Nom de naissance','Ex. Dupont-Martin',{req:1,col:'col-md-6',attrs:'maxlength="80"'})}
  <div class="col-md-6"><label class="form-label req" for="f-genre">Genre</label><select class="form-select" id="f-genre" data-f="genre"><option value="">—</option><option>Femme</option><option>Homme</option><option>Non-binaire</option><option>Je préfère ne pas dire</option></select></div>
  <div class="col-md-6" id="kuaModeWrap" hidden><label class="form-label" for="f-kuaMode">Calcul Kua</label><select class="form-select" id="f-kuaMode" data-f="kuaMode"><option value="M">Masculin</option><option value="F">Féminin</option></select></div>
 </div>`,validate:()=>reqFields(['prenomUsuel','prenoms','nomNaissance','genre'])},
{key:'date',label:'Naissance',build:()=>`
 <h1 class="slide-title">Date et heure de naissance</h1>
 <p class="slide-sub">Le thème natal et le Bazi ont besoin de la date. L'ascendant a besoin de l'heure exacte.</p>
 <label class="form-label req">Date</label>
 <div class="row g-2" style="max-width:420px">
  <div class="col-3"><input class="form-control dnum" id="f-bd" data-f="bd" inputmode="numeric" maxlength="2" placeholder="JJ" data-nextf="f-bm"></div>
  <div class="col-3"><input class="form-control dnum" id="f-bm" data-f="bm" inputmode="numeric" maxlength="2" placeholder="MM" data-nextf="f-by"></div>
  <div class="col-6"><input class="form-control dnum" id="f-by" data-f="by" inputmode="numeric" maxlength="4" placeholder="AAAA" data-nextf="f-bh"></div>
 </div>
 <div class="mt-4"><label class="form-label req">Heure locale (24 h)</label>
 <div class="row g-2 align-items-center" style="max-width:300px">
  <div class="col-5"><input class="form-control dnum" id="f-bh" data-f="bh" inputmode="numeric" maxlength="2" placeholder="HH" data-nextf="f-bmin"></div>
  <div class="col-2 text-center fw-bold">:</div>
  <div class="col-5"><input class="form-control dnum" id="f-bmin" data-f="bmin" inputmode="numeric" maxlength="2" placeholder="MM"></div>
 </div>
 <div class="form-check mt-3"><input class="form-check-input" type="checkbox" id="f-timeUnknown" data-f="timeUnknown"><label class="form-check-label" for="f-timeUnknown">Je ne connais pas mon heure <span class="text-muted">(ascendant omis)</span></label></div></div>
 ${previewBox}`,validate:()=>{const c=computeAll();if(!c.ok&&c.errors.some(e=>/naissance|Jour|Mois|Année|Heure|existe/.test(e))){toast(c.errors[0],'err');return false;}return true;}},
{key:'lieu',label:'Lieu',build:()=>`
 <h1 class="slide-title">Lieu de naissance</h1>
 <p class="slide-sub">Coordonnées géographiques pour l'ascendant et les maisons.</p>
 <datalist id="dl-cities">${CITIES.map(c=>'<option value="'+esc(c[0])+'">'+esc(c[1])+'</option>').join('')}</datalist>
 <div class="row g-3">
  <div class="col-md-6"><label class="form-label req" for="f-ville">Ville</label><input class="form-control" id="f-ville" data-f="ville" list="dl-cities" placeholder="Ex. Lyon"></div>
  ${txt('pays','Pays','Ex. France',{req:1,col:'col-md-6'})}
  ${txt('lat','Latitude (°)','48.8566',{col:'col-md-3',attrs:'inputmode="decimal"'})}
  ${txt('lon','Longitude (°)','2.3522',{col:'col-md-3',attrs:'inputmode="decimal"'})}
  <div class="col-md-6"><label class="form-label" for="f-tz">Fuseau IANA</label><input class="form-control" id="f-tz" data-f="tz" placeholder="Europe/Paris"></div>
  ${txt('tzManual','Décalage UTC manuel','ex. 1',{col:'col-md-6',attrs:'inputmode="decimal"'})}
 </div>
 <div class="hint mt-2" id="cityNote"></div>
 ${previewBox}`,validate:()=>{const bad=reqFields(['ville','pays']);if(!bad)return false;const c=computeAll();if(!c.ok){toast(c.errors[0],'err');return false;}return true;}},
{key:'phys',label:'Corps',build:()=>`
 <h1 class="slide-title">Votre corps</h1>
 <p class="slide-sub">Ces réponses alimentent l'ayurvéda, la kinésiologie, le biorhythme et l'espérance de vie.</p>
 ${qcm('physEtat','État général',['Excellente','Bonne','Moyenne','Fragile'],['💪','🙂','😐','😔'])}
 ${qcm('physActivite','Activité physique',[['Quotidienne','Quotidienne'],['Régulière','Régulière (2-3 fois/semaine)'],['Occasionnelle','Occasionnelle'],['Rare','Rare']],['🏃','🏋️','🚶','🛋️'])}
 <div class="d-flex flex-column gap-2 mt-2">${rangeRow('physSleep','Sommeil',6)}${rangeRow('physEnergy','Énergie',6)}</div>
 <div class="row g-3 mt-1">${txt('reveil','Heure de réveil habituelle','07:00',{col:'col-md-4',attrs:'maxlength="5"'})}</div>`},
{key:'mental',label:'Mental',build:()=>`
 <h1 class="slide-title">Votre esprit</h1>
 ${qcm('mentEtat','État général',['Serein','Globalement stable','Oscillant','Anxieux'],['😌','🙂','😕','😰'])}
 <div class="d-flex flex-column gap-2">${rangeRow('mentStress','Stress',5)}${rangeRow('mentMood','Humeur',6)}</div>`},
{key:'sciqcm',label:'Réglages sciences',build:()=>{
  const R=[
    {k:'aq_mood',q:'Ces 7 derniers jours, votre humeur',o:[['tres_bien','Très bonne'],['bien','Bonne'],['moyenne','Moyenne'],['basse','Basse'],['tres_basse','Très basse']],i:['😄','🙂','😐','😔','😞']},
    {k:'aq_energy',q:'Votre énergie au réveil',o:[['plein','Plein d\'élan'],['correct','Correct'],['faible','Faible'],['epuise','Épuisé']],i:['⚡','🙂','😴','💤']},
    {k:'aq_luck',q:'Votre sentiment sur la chance',o:[['tres_chance','Très en chance'],['chance','Plutôt chance'],['neutre','Neutre'],['malchance','Malchance'],['tres_malchance','Très malchance']],i:['🍀','✨','😐','☁️','🌧️']},
    {k:'aq_relations',q:'Vos relations sociales',o:[['excellent','Épanouissantes'],['bon','Bonnes'],['moyen','Moyennes'],['tendu','Tendues'],['isole','Isolé']],i:['💖','😊','😐','😤','🫥']},
    {k:'aq_health',q:'Votre santé',o:[['tres_bon','Excellente'],['bon','Bonne'],['moyen','Moyenne'],['fragile','Fragile'],['souci','Problème actif']],i:['💚','🙂','😐','😷','🤒']},
    {k:'aq_spirit',q:'Votre sentiment spirituel',o:[['fort','Fort, connecté'],['calme','Calme'],['cherche','En recherche'],['perdu','Perdu'],['vide','Vide']],i:['🕯️','🧘','🔍','🌀','🌑']},
    {k:'aq_stress',q:'Votre stress',o:[['tres_bas','Très bas'],['bas','Bas'],['moyen','Moyen'],['haut','Haut'],['tres_haut','Très haut']],i:['😌','🙂','😐','😟','😫']},
    {k:'aq_decisions',q:'Vos décisions',o:[['claires','Claires'],['hesitantes','Hésitantes'],['bloquees','Bloquées']],i:['✨','🤔','⛔']}
  ];
  let h=`<h1 class="slide-title">Réglages pour les sciences</h1>
  <p class="slide-sub">Ces réponses affinent les scores de chaque tradition en fonction de votre état réel. <strong>Toutes les sciences</strong> sont concernées.</p>`;
  R.forEach(q=>{h+=qcm(q.k,q.q,q.o,q.i);});
  return h;
}},
{key:'goal',label:'Objectif',build:()=>`
 <h1 class="slide-title">Que cherchez-vous ?</h1>
 ${qcm('goalMain','Objectif principal',['Mieux me connaître','Apaiser mon stress','Clarifier une décision','Comprendre mes blocages','Retrouver de l\'élan'],['🧭','😌','⚖️','🔓','🔥'])}
 ${qcm('goalHorizon','Horizon',[['Court','Court terme (semaines)'],['Moyen','Moyen terme (mois)'],['Long','Long terme (année)']],['⚡','🌱','🌳'])}
 <div class="row g-3 mt-2"><div class="col-12"><label class="form-label" for="f-question">Votre question du moment <span class="text-muted">(avec vos mots)</span></label><textarea class="form-control" id="f-question" data-f="question" rows="2" maxlength="240" placeholder="Ex. Dois-je quitter mon poste pour monter ma structure ?"></textarea></div>
 <div class="col-12"><label class="form-label" for="f-situation">Situation actuelle en deux phrases</label><textarea class="form-control" id="f-situation" data-f="situation" rows="2" maxlength="300" placeholder="Ex. Salarié depuis 8 ans, en couple, appartement avec un chat."></textarea></div></div>`},
{key:'ayu',label:'Ayurvéda',build:()=>`
 <h1 class="slide-title">Constitution ayurvédique</h1>
 <p class="slide-sub">Sept questions pour estimer votre dosha dominant.</p>
 ${AYU.map(q=>qcm(q.k,q.q,q.o)).join('')}`},
{key:'mtc',label:'MTC',build:()=>`
 <h1 class="slide-title">Médecine Traditionnelle Chinoise</h1>
 ${qcm('elementMTC','Élément dominant',[['Bois','Bois — croissance, projet'],['Feu','Feu — joie, relation'],['Terre','Terre — ancrage, souci'],['Métal','Métal — structure, deuil'],['Eau','Eau — mémoire, peur']],['🌱','🔥','🌍','⚪','🌊'])}
 ${qcm('mtcTemp','Terrain thermique',[['frileux','Frileux'],['chaud','Chaud'],['neutre','Neutre']],['🥶','🥵','🌡️'])}`},
{key:'fs',label:'Feng Shui',build:()=>`
 <h1 class="slide-title">Environnement</h1>
 ${qcm('fengshuiOrientation','Orientation principale',[['Nord','Nord'],['Sud','Sud'],['Est','Est'],['Ouest','Ouest']],['⬆️','⬇️','➡️','⬅️'])}
 ${qcm('fengshuiElement','Ce qui manque chez vous',['La lumière','L\'air','Les plantes','L\'ordre'],['☀️','💨','🌿','📐'])}`},
{key:'kine',label:'Kinésiologie',build:()=>`
 <h1 class="slide-title">Sphère fragile</h1>
 ${qcm('kinesioSphere','Sphère dominante',[['Structurelle','Structurelle — os, muscles'],['Émotionnelle','Émotionnelle — stress, charge'],['Énergétique','Énergétique — méridiens'],['Chimique','Chimique — alimentation']],['🦴','💭','🌊','🥗'])}`},
{key:'img',label:'Symboles',build:()=>`
 <h1 class="slide-title">Une image par famille</h1>
 <p class="slide-sub">Choisissez l'image qui vous attire, sans réfléchir.</p>
 <div class="mb-3" data-pick="arbre"><label class="form-label">Arbre druidique</label><div class="img-grid">
  ${imgCard('Chêne (Duir)','🌳','https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=60')}
  ${imgCard('Bouleau (Beith)','🌿','https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?auto=format&fit=crop&w=400&q=60')}
  ${imgCard('Saule (Saille)','🍃','https://images.unsplash.com/photo-1518495973542-4542c06a5843?auto=format&fit=crop&w=400&q=60')}</div></div>
 <div class="mb-3" data-pick="animal"><label class="form-label">Animal</label><div class="img-grid">
  ${imgCard('Loup','🐺','https://images.unsplash.com/photo-1564466809058-bf4114d55352?auto=format&fit=crop&w=400&q=60')}
  ${imgCard('Aigle','🦅','https://images.unsplash.com/photo-1611689342806-0863700ce1e4?auto=format&fit=crop&w=400&q=60')}
  ${imgCard('Cerf','🦌','https://images.unsplash.com/photo-1484406566174-9da000fda645?auto=format&fit=crop&w=400&q=60')}</div></div>
 <div class="mb-3" data-pick="element"><label class="form-label">Élément</label><div class="img-grid">
  ${imgCard('Feu','🔥','https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=400&q=60')}
  ${imgCard('Eau','🌊','https://images.unsplash.com/photo-1505118380757-91f5f5632de0?auto=format&fit=crop&w=400&q=60')}
  ${imgCard('Terre','⛰️','https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=400&q=60')}</div></div>`},
{key:'tarot',label:'Tarot',build:()=>`
 <h1 class="slide-title">Tirage de tarot</h1>
 <p class="slide-sub">Trois cartes : passé, présent, à venir. Elles seront utilisées par la science Tarot de Marseille.</p>
 <div class="tirage-box"><button class="btn-tirage" id="btnDrawTarot" type="button"><i class="bi bi-shuffle me-1"></i> Tirer trois cartes</button><div class="tirage-result" id="tarotResult"></div></div>`},
{key:'rune',label:'Runes',build:()=>`
 <h1 class="slide-title">Tirage de rune</h1>
 <div class="tirage-box"><button class="btn-tirage" id="btnDrawRune" type="button"><i class="bi bi-gem me-1"></i> Tirer une rune</button><div class="tirage-result" id="runeResult"></div></div>`},
{key:'yj',label:'Yi Jing',build:()=>`
 <h1 class="slide-title">Tirage Yi Jing</h1>
 <div class="tirage-box"><button class="btn-tirage" id="btnDrawYijing" type="button"><i class="bi bi-coin me-1"></i> Lancer les pièces</button><div class="tirage-result" id="yijingResult"></div></div>`},
{key:'geo',label:'Géomancie',build:()=>`
 <h1 class="slide-title">Tirage géomancie</h1>
 <div class="tirage-box"><button class="btn-tirage" id="btnDrawGeo" type="button"><i class="bi bi-grid-3x3 me-1"></i> Tirer une figure</button><div class="tirage-result" id="geoResult"></div></div>`},
{key:'jung',label:'Jung',build:()=>`
 <h1 class="slide-title">Archétype jungien</h1>
 ${qcm('archetype','Lequel vous parle aujourd\'hui ?',ARCHETYPES)}`},
{key:'kab',label:'Kabbale',build:()=>`
 <h1 class="slide-title">Séphira</h1>
 ${qcm('sephira','Laquelle vous attire ?',SEPHIRA)}`},
{key:'reve',label:'Rêves',build:()=>`
 <h1 class="slide-title">Rêve récurrent</h1>
 ${qcm('reve','Motif dominant',['La chute','La poursuite','Le vol','L\'eau','La maison','Un animal','Un inconnu','La mort / renaissance'])}
 <div class="row g-3"><div class="col-12"><label class="form-label" for="f-reveTexte">Description en une phrase (optionnel)</label><textarea class="form-control" id="f-reveTexte" data-f="reveTexte" rows="2" maxlength="220"></textarea></div></div>`},
{key:'sciences',label:'Sciences',build:()=>{
  const cats={};SCIENCES.forEach(s=>{(cats[s.cat]=cats[s.cat]||[]).push(s);});
  const groups=['Astres','Nombres','Oracles','Occulte','Corps','Psyché','Nature'];
  let html=`<h1 class="slide-title">Choisissez vos sciences</h1>
  <p class="slide-sub">Cochez les traditions à faire parler. ${SCIENCES.length} disponibles.</p>
  <div class="sel-toolbar">
   <button class="big" id="btnSelectAll" type="button"><i class="bi bi-check-all me-1"></i> Tout sélectionner (${SCIENCES.length})</button>
   <button class="btn-ghost btn-sm" id="btnSelectNone" type="button"><i class="bi bi-x-lg me-1"></i>Tout désélectionner</button>
   <button class="btn-ghost btn-sm" id="btnSelectDefault" type="button"><i class="bi bi-stars me-1"></i>Par défaut (${SCIENCES.filter(s=>s.on).length})</button>
   <span class="pill pill-soft ms-auto" id="selCount"></span>
  </div>
  <div class="sci-select-grid" id="sciSelectGrid">`;
  groups.forEach(g=>{
    if(!cats[g])return;
    html+=`<div class="sci-cat-header"><i class="bi bi-chevron-right"></i>${g}<span class="count">${cats[g].length}</span></div>`;
    cats[g].forEach(s=>{
      const on=getSelected().indexOf(s.id)>=0;
      html+=`<label class="sci-select ${on?'on':''}" data-sci-id="${s.id}">
        <input type="checkbox" ${on?'checked':''} data-sci-id="${s.id}">
        <div class="ic" style="background:${s.color}"><i class="bi ${s.icon}"></i></div>
        <div class="meta"><div class="nm">${esc(s.name)}</div><div class="cat">${esc(s.cat)}</div></div>
      </label>`;
    });
  });
  html+='</div>';
  return html;
 },validate:()=>{if(getSelected().length===0){toast('Sélectionnez au moins une science.','err');return false;}return true;}},
{key:'review',label:'Vérification',build:()=>`
 <h1 class="slide-title">Tout est prêt</h1>
 <p class="slide-sub">Vérifiez vos données avant de lancer la génération.</p>
 <div class="review-grid" id="reviewGrid"></div>
 <div class="form-check mt-2"><input class="form-check-input" type="checkbox" id="f-consent"><label class="form-check-label" for="f-consent" style="font-size:.9rem">Je comprends qu'EsotherIA est un outil de réflexion symbolique, sans diagnostic médical.</label></div>`,final:true}
];

function slideShell(i){
 const s=SLIDES[i];const last=i===SLIDES.length-1;
 return `<div class="slide" data-slide="${i}"><div class="slide-inner">
  <div class="wiz-progress">
   <div class="wiz-progress-bar"><div class="fill" style="width:${Math.round((i+1)/SLIDES.length*100)}%"></div></div>
   <span class="wiz-progress-label">Étape ${i+1}/${SLIDES.length}</span>
  </div>
  <div class="eyebrow"><span class="num">${i+1}</span> ${esc(s.label)}</div>
  ${s.build()}
  <div class="slide-actions ${i===0?'right':''}">
   ${i>0?`<button class="btn-ghost" data-prev><i class="bi bi-arrow-left"></i> Retour</button>`:''}
   <div class="d-flex gap-2 flex-wrap">
   ${last?'<button class="btn-brand" id="btnLaunch"><i class="bi bi-journal-richtext"></i> Générer le rapport</button>':'<button class="btn-brand" data-next>Continuer <i class="bi bi-arrow-right"></i></button>'}
   </div>
  </div>
 </div></div>`;
}
function renderSlides(){
 const deck=$('#deck');
 if(!deck)throw new Error('Deck introuvable');
 deck.innerHTML=SLIDES.map((s,i)=>slideShell(i)).join('');
 bindScienceSelect();
 refreshPreview();
}
function bindScienceSelect(){
 const grid=$('#sciSelectGrid');if(!grid)return;
 const update=()=>{
  const sel=new Set();$$('#sciSelectGrid input[type=checkbox]').forEach(cb=>{if(cb.checked)sel.add(cb.dataset.sciId);});
  state.selectedSciences=Array.from(sel);saveSel();clearDayValidationCache();
  $$('#sciSelectGrid .sci-select').forEach(el=>el.classList.toggle('on',el.querySelector('input').checked));
  const cnt=$('#selCount');if(cnt)cnt.innerHTML='<i class="bi bi-check2-circle"></i> '+sel.size+' / '+SCIENCES.length+' sélectionnées';
 };
 grid.addEventListener('change',e=>{if(e.target.matches('input[type=checkbox]'))update();});
 const all=()=>{$$('#sciSelectGrid input[type=checkbox]').forEach(cb=>{cb.checked=true;});update();};
 const none=()=>{$$('#sciSelectGrid input[type=checkbox]').forEach(cb=>{cb.checked=false;});update();};
 const def=()=>{$$('#sciSelectGrid input[type=checkbox]').forEach(cb=>{const s=SCIENCES.find(x=>x.id===cb.dataset.sciId);cb.checked=!!(s&&s.on);});update();};
 const ba=$('#btnSelectAll'),bn=$('#btnSelectNone'),bd=$('#btnSelectDefault');
 if(ba)ba.onclick=all;if(bn)bn.onclick=none;if(bd)bd.onclick=def;
 update();
}
function reqFields(list){let ok=true;list.forEach(f=>{const el=$('#f-'+f);const v=(state.profile[f]||'').toString().trim();if(!v){ok=false;if(el)el.classList.add('field-err');}else if(el)el.classList.remove('field-err');});if(!ok)toast('Complétez les champs obligatoires (*).','err');return ok;}
function validateSlide(i){const s=SLIDES[i];return s.validate?s.validate():true;}
function goTo(idx,dir){
 if(idx<0||idx>=SLIDES.length)return;
 state.currentSlide=idx;
 if(!$$('.slide').length){try{renderSlides();}catch(e){showBootError('Slides: '+e.message);return;}}
 $$('.slide').forEach(s=>s.classList.remove('active'));
 const target=document.querySelector('.slide[data-slide="'+idx+'"]');
 if(target)target.classList.add('active');
 window.scrollTo({top:0,behavior:'smooth'});
 if(SLIDES[idx].final)renderReview();
 refreshPreview();
}
function goNext(){if(!validateSlide(state.currentSlide))return;goTo(state.currentSlide+1);}
function goPrev(){goTo(state.currentSlide-1);}

const BIRTH_KEYS=['bd','bm','by','bh','bmin','timeUnknown','lat','lon','tz','tzManual','ville','prenoms','nomNaissance','genre','kuaMode'];
function onField(e){
 const t=e.target;const k=t.dataset&&t.dataset.f;if(!k)return;let v;
 if(t.type==='checkbox')v=t.checked;
 else if(t.type==='radio'){
  if(!t.checked)return;v=t.value;
  const g=t.closest('.qcm-group');
  if(g)g.querySelectorAll('.qcm-item').forEach(it=>it.classList.toggle('checked',it.contains(t)&&t.checked));
 }
 else v=t.value;
 if(t.type==='range'){v=+v;const o=$('#v-'+k);if(o)o.textContent=v+'/10';}
 if(['bd','bm','by','bh','bmin'].indexOf(k)>=0){v=String(v).replace(/\D/g,'');if(t.value!==v)t.value=v;if(v.length>=t.maxLength&&e.type==='input'&&t.dataset.nextf){const nx=$('#'+t.dataset.nextf);if(nx&&!(state.profile.timeUnknown&&t.dataset.nextf==='f-bh'))nx.focus();}}
 state.profile[k]=v;t.classList&&t.classList.remove('field-err');saveProfile();
 if(k==='ville')autofillCity();
 if(k==='timeUnknown')applyTimeUnknown();
 if(k==='genre')$('#kuaModeWrap').hidden=!(v==='Non-binaire'||v==='Je préfère ne pas dire');
 if(BIRTH_KEYS.indexOf(k)>=0)refreshPreview();
 clearDayValidationCache();
}
function applyTimeUnknown(){const u=!!state.profile.timeUnknown;['f-bh','f-bmin'].forEach(id=>{const el=$('#'+id);if(el){el.disabled=u;if(u){el.value='';el.classList.remove('field-err');}}});if(u){delete state.profile.bh;delete state.profile.bmin;saveProfile();}}
function autofillCity(){const v=(state.profile.ville||'').trim().toLowerCase();const c=CITIES.find(x=>x[0].toLowerCase()===v);if(!c)return;const set=(f,val)=>{state.profile[f]=String(val);const el=$('#f-'+f);if(el)el.value=val;};set('pays',c[1]);set('lat',c[2]);set('lon',c[3]);set('tz',c[4]);saveProfile();const n=$('#cityNote');if(n)n.textContent='Coordonnées renseignées pour '+c[0]+'.';}
function refreshPreview(){
 const boxes=$$('[data-preview]');if(!boxes.length)return;
 const c=computeAll();
 boxes.forEach(b=>{
  if(!c.ok){b.className='preview bad';b.innerHTML='<b>Calcul en attente :</b> '+esc(c.errors[0]);return;}
  b.className='preview';
  const ch=['Soleil '+SIGN_GLYPH[SIGNS.indexOf(c.bodies[0].sign)]+' '+c.bodies[0].sign,c.ascSign?'Ascendant '+c.ascSign:'Ascendant inconnu','Chemin '+c.num.lp,'Bazi '+c.bazi.year.animal+' '+c.bazi.year.stemEl,'Kua '+c.kua.n];
  b.innerHTML='<b>Calculs réels</b> — '+esc(c.birth.utc)+'<div class="chips">'+ch.map(x=>'<span class="chip">'+esc(x)+'</span>').join('')+'</div>'+(c.warnings.length?'<div class="hint mt-2">'+esc(c.warnings.join(' '))+'</div>':'');
 });
}
function hydrate(){
 const p=state.profile,k=state.picks;
 $$('[data-f]').forEach(el=>{const f=el.dataset.f;const v=p[f];
  if(el.type==='radio'){if(v!=null&&String(v)===el.value){el.checked=true;const g=el.closest('.qcm-group');if(g)g.querySelectorAll('.qcm-item').forEach(it=>it.classList.toggle('checked',it.contains(el)&&el.checked));}}
  else if(el.type==='checkbox'){el.checked=!!v;}
  else if(el.type==='range'){if(v!=null){el.value=v;const o=$('#v-'+f);if(o)o.textContent=v+'/10';}else{p[f]=+el.value;}}
  else if(v!=null)el.value=v;});
 applyTimeUnknown();
 const kw=$('#kuaModeWrap');if(kw)kw.hidden=!(p.genre==='Non-binaire'||p.genre==='Je préfère ne pas dire');
 ['arbre','animal','element'].forEach(g=>{const val=k.images[g];if(val){const card=$$('[data-pick="'+g+'"] .img-card').find(c=>c.dataset.val===val);if(card)card.classList.add('selected');}});
 renderTarot();renderRune();renderYijing();renderGeo();
 const sk=readLS(LS.keys,[]);if(sk.length&&$('#f-keys'))$('#f-keys').value=sk.map(x=>x.key+'|'+(x.rpm||10)).join('\n');
 const cf=readLS(LS.cfg,null);if(cf&&cf.defaultRpm&&$('#f-default-rpm'))$('#f-default-rpm').value=cf.defaultRpm;
 renderKeysCount();
}
function drawTarot(){
 const POS=['Passé','Présent','À venir'];
 const drawn=pickN(TAROT,3);
 state.picks.tarot=drawn.map((card,i)=>({pos:POS[i],card,rev:rnd(3)===0}));
 savePicks();renderTarot();clearDayValidationCache();
}
function renderTarot(){
 const box=$('#tarotResult');if(!box)return;
 box.innerHTML=(state.picks.tarot||[]).map(t=>{
  if(!t)return '';
  const card=Array.isArray(t.card)?t.card:null;
  const nom=card?card[0]:(t.name||'—');const kw=card?card[1]:(t.kwUp||'—');
  return `<div class="tirage-card">🃏 ${esc(t.pos||'—')} : ${esc(nom+(t.rev?' (renversé)':''))}<small>${esc(kw)}</small></div>`;
 }).join('');
}
function drawRune(){const r=RUNES[rnd(RUNES.length)];state.picks.rune=[r[0],r[1]];savePicks();renderRune();clearDayValidationCache();}
function renderRune(){const box=$('#runeResult');if(!box||!state.picks.rune)return;const r=Array.isArray(state.picks.rune)?state.picks.rune:RUNES.find(x=>x[0]===state.picks.rune)||['—','—'];box.innerHTML=`<div class="tirage-card">ᚠ ${esc(r[0]||'—')}<small>${esc(r[1]||'—')}</small></div>`;}
function drawYijing(){
 const lines=[];for(let i=0;i<6;i++){let s=0;for(let j=0;j<3;j++)s+=rnd(2)?3:2;lines.push(s);}
 const bits=lines.map(l=>(l===7||l===9)?'1':'0').join('');
 const toBits=lines.map(l=>l===6?'1':l===9?'0':(l===7?'1':'0')).join('');
 const num=HEX_NUM(bits),moving=lines.map((l,i)=>(l===6||l===9)?i+1:0).filter(Boolean);
 const toNum=HEX_NUM(toBits);
 state.picks.yijing={lines,num,name:YJ_NAMES[num-1],moving,toNum,toName:YJ_NAMES[toNum-1]};
 savePicks();renderYijing();clearDayValidationCache();
}
function renderYijing(){const box=$('#yijingResult');const y=state.picks.yijing;if(!box||!y||!Array.isArray(y.lines))return;
 const sym=y.lines.map(l=>({6:'▬▬  ▬▬ ✕',7:'▬▬▬▬▬▬',8:'▬▬  ▬▬',9:'▬▬▬▬▬▬ ○'}[l]||'?')).reverse();
 box.innerHTML=`<div class="tirage-card" style="max-width:340px"><div style="font-family:monospace;line-height:1.35">${sym.join('<br>')}</div><div class="mt-2"><b>n°${y.num} — ${esc(y.name)}</b></div><small>${(y.moving&&y.moving.length)?'lignes mutantes : '+y.moving.join(', ')+' → n°'+y.toNum+' '+esc(y.toName):'aucune ligne mutante'}</small></div>`;}
function drawGeo(){const g=GEO[rnd(GEO.length)];state.picks.geo=g[0];savePicks();renderGeo();clearDayValidationCache();}
function renderGeo(){const box=$('#geoResult');if(!box||!state.picks.geo)return;const g=GEO.find(x=>x[0]===state.picks.geo)||['—','—'];box.innerHTML=`<div class="tirage-card">◈ ${esc(g[0])}<small>${esc(g[1])}</small></div>`;}
function renderReview(){
 const c=computeAll();const grid=$('#reviewGrid');const p=state.profile;
 if(!c.ok){if(grid)grid.innerHTML='<div class="alert alert-danger w-100">'+esc(c.errors.join(' '))+'</div>';return;}
 state.calc=c;const ay=ayuValidations(p);
 const items=[['Héros',p.prenomUsuel+' · '+c.num.full],['Naissance',c.birth.long+(c.birth.timeKnown?' à '+String(c.birth.h).padStart(2,'0')+':'+String(c.birth.mi).padStart(2,'0'):' (heure inconnue)')],['Lieu',(p.ville||'')+', '+(p.pays||'')],['Soleil / Lune',sunSign(c)+' / '+moonSign(c)],['Ascendant',c.ascSign||'—'],['Chemin de vie',c.num.lp],['Bazi',c.bazi.year.animal+' '+c.bazi.year.stemEl],['Kua',c.kua.n+' ('+c.kua.group+')'],['Dosha',ay.res],['Espérance de vie','Non estimée : aucune méthode fiable ici'],['Sciences',getSelected().length+' / '+SCIENCES.length],['Clés Agnes',AI.count()+' clé(s)']];
 if(grid)grid.innerHTML=items.map(([l,v])=>`<div class="review-item"><div class="review-label">${esc(l)}</div><div class="review-value">${esc(String(v))}</div></div>`).join('');
}
function parseKeys(text){
 const dr=Math.max(1,Math.min(120,parseInt(($('#f-default-rpm')||{}).value,10)||10));
 const seen=new Set(),out=[];
 String(text||'').split(/\r?\n/).forEach(line=>{
  const pt=line.trim().split('|').map(s=>s.trim()),key=pt[0]||'';
  if(!key||seen.has(key))return;
  seen.add(key);
  const rpm=Math.max(1,Math.min(120,parseInt(pt[1]||String(dr),10)||dr));
  out.push({key,rpm});
 });
 return out.slice(0,10);
}
function renderKeysCount(){const ta=$('#f-keys');const n=parseKeys(ta?ta.value:'').length;const el=$('#keysCount');if(el)el.innerHTML='<i class="bi bi-key"></i> '+n+' clé'+(n>1?'s':'');updateModeBadge();}
function applyKeys(){const keys=parseKeys($('#f-keys').value);AI.setKeys(keys);writeLS(LS.keys,keys);const dr=parseInt($('#f-default-rpm').value,10)||10;AI.setCfg({defaultRpm:dr});writeLS(LS.cfg,{defaultRpm:dr});updateModeBadge();return keys;}
function updateModeBadge(){const n=AI.count();const b=$('#modeBadge');if(!b)return;b.className='pill '+(n?'pill-green':'pill-rose');b.innerHTML=n?'<i class="bi bi-check-circle"></i> Agnes · '+n+' clé'+(n>1?'s':''):'<i class="bi bi-exclamation-circle"></i> Agnes';}

/* ==================== ANALYSIS ==================== */
function showView(name){state.currentView=name;$('#view-wizard').hidden=name!=='wizard';$('#view-analyzing').hidden=name!=='analyzing';$('#view-report').hidden=name!=='report';window.scrollTo({top:0,behavior:'smooth'});}
let stepsDone=0,stepsTotal=1;
function buildAgentGrid(){
 const sels=getSciencesSelected();
 const grid=$('#agentGrid');if(!grid)return;
 grid.innerHTML=sels.map(c=>`<div class="agent-tile" id="tile-${c.id}"><div class="agent-ic" style="--c:${c.color}"><i class="bi ${c.icon}"></i></div><div class="agent-meta"><div class="agent-name">${esc(c.name)}</div><div class="agent-status">En attente</div></div><div class="agent-dot"></div></div>`).join('')+`<div class="agent-tile" id="tile-synth"><div class="agent-ic" style="--c:#0b1020"><i class="bi bi-stars"></i></div><div class="agent-meta"><div class="agent-name">Synthèse et bilan transversal</div><div class="agent-status">En attente</div></div><div class="agent-dot"></div></div>`;
 const p=$('#globalProgress');if(p)p.style.width='0%';
 const lb=$('#logBox');if(lb)lb.innerHTML='';
 stepsDone=0;stepsTotal=sels.length+1;
}
function setAgent(id,st,label){const t=$('#tile-'+id);if(!t)return;t.classList.remove('run','done','err');const l=t.querySelector('.agent-status');if(st==='run'){t.classList.add('run');l.textContent=label||'Génération…';}if(st==='done'){t.classList.add('done');l.textContent=label||'Prêt';}if(st==='err'){t.classList.add('err');l.textContent=label||'Erreur';}}
function stepDone(){stepsDone++;const p=$('#globalProgress');if(p)p.style.width=Math.round(stepsDone/stepsTotal*100)+'%';const s=$('#analyzeSub');if(s)s.textContent=stepsDone+' / '+stepsTotal;}
function log(msg){const box=$('#logBox');if(!box)return;const d=document.createElement('div');d.innerHTML='<span class="t">'+new Date().toLocaleTimeString('fr-FR',{hour12:false})+'</span>'+esc(msg);box.appendChild(d);box.scrollTop=box.scrollHeight;}

async function runAnalysis(){
 if(!AI.count()){toast('Ajoutez au moins une clé Agnes.','err');showView('wizard');goTo(0);return;}
 const c=computeAll();if(!c.ok){toast(c.errors[0],'err');return;}
 state.calc=c;showView('analyzing');buildAgentGrid();
 const today=new Date();
 state.report={sciences:{},syntheses:{},archive:{},predictions:{},validationHistory:[],date:dateKey(today),at:0,errors:[],knownDays:{},question:state.profile.question||'',period:'day'};
 log('Agnes · '+AI.count()+' clé(s) · '+getSelected().length+' sciences');
 const sels=getSciencesSelected();
 await mapLimit(sels,AI.concurrency(),async(sci)=>{
  setAgent(sci.id,'run','Génération…');
  try{
   const result=await generateOne(sci,'day',today);
   state.report.sciences[sci.id]={annual:result,periods:{day:result}};
   saveGeneratedPrediction(sci,'day',today,result);
   setAgent(sci.id,'done','Prêt');
  }catch(e){
   state.report.sciences[sci.id]={annual:null,periods:{},error:e.message};
   state.report.errors.push({id:sci.id,msg:e.message});
   setAgent(sci.id,'err',e.message.slice(0,30));log(sci.name+' : '+e.message);
  }
  stepDone();saveActiveArchive();writeLS(LS.report,state.report);
 });
 setAgent('synth','run','Synthèse…');
 const successful=sels.filter(s=>{const e=state.report.sciences[s.id];return !!(e&&(e.periods&&e.periods.day||e.annual));});
 if(successful.length>=1){
  try{
   const synth=await generateSynthesis('day',today,successful);
   state.report.syntheses.day=synth;
   setAgent('synth','done','Prête');
  }catch(e){
   const fallback=fallbackSynthesis(successful,'day');
   state.report.syntheses.day=fallback;
   setAgent('synth','done','Fallback');
  }
 }else setAgent('synth','err','Aucune science réussie');
 if(successful.length){
  setAgent('synth','run','Bilan transversal…');
  try{await generateGrandBilan();setAgent('synth','done','Rapport complet prêt');}
  catch(e){state.report.grandBilan=fallbackGrandBilan(collectGrandCorpus());writeLS(LS.report,state.report);setAgent('synth','done','Bilan de secours');log('Bilan transversal : '+e.message);}
 }
 stepDone();state.report.at=Date.now();
 state.report.knownDays[dateKey(today)]=true;
 saveActiveArchive();
 state.reportPeriod='day';state.reportDate=today;
 writeLS(LS.report,state.report);writeLS(LS.reportAt,Date.now());
 showView('report');renderReport();
 if(state.report.errors.length)toast(state.report.errors.length+' science(s) en erreur.','warn');else toast('Rapport généré.','ok');
}

/* ==================== ARCHIVES PAR DATE ==================== */
function ensureReportShape(){
 if(!state.report||typeof state.report!=='object')return;
 if(!state.report.sciences||typeof state.report.sciences!=='object'||Array.isArray(state.report.sciences))state.report.sciences={};
 if(!state.report.syntheses||typeof state.report.syntheses!=='object'||Array.isArray(state.report.syntheses))state.report.syntheses={};
 if(!state.report.archive||typeof state.report.archive!=='object'||Array.isArray(state.report.archive))state.report.archive={};
 if(!state.report.knownDays||typeof state.report.knownDays!=='object')state.report.knownDays={};
 if(!state.report.predictions||typeof state.report.predictions!=='object')state.report.predictions={};
 state.report.errors=Array.isArray(state.report.errors)?state.report.errors:[];
 if(state.report.grandBilan){const gb=normalizeGrandBilan(state.report.grandBilan);if(gb)state.report.grandBilan=gb;else delete state.report.grandBilan;}
 state.report.validationHistory=Array.isArray(state.report.validationHistory)?state.report.validationHistory:[];
 Object.keys(state.report.syntheses).forEach(k=>{const n=normalizeSynthesis(state.report.syntheses[k]);if(n)state.report.syntheses[k]=n;else delete state.report.syntheses[k];});
 Object.keys(state.report.archive).forEach(k=>{
  const snap=state.report.archive[k];if(!snap||typeof snap!=='object'){delete state.report.archive[k];return;}
  snap.sciences=snap.sciences&&typeof snap.sciences==='object'?snap.sciences:{};
  snap.syntheses=snap.syntheses&&typeof snap.syntheses==='object'?snap.syntheses:{};
  Object.keys(snap.syntheses).forEach(sk=>{const n=normalizeSynthesis(snap.syntheses[sk]);if(n)snap.syntheses[sk]=n;else delete snap.syntheses[sk];});
 });
}
function saveActiveArchive(){
 if(!state.report)return;
 ensureReportShape();
 const key=state.report.date||dateKey(state.reportDate);
 state.report.archive[key]={sciences:Object.assign({},state.report.sciences||{}),syntheses:Object.assign({},state.report.syntheses||{})};
}
function activateArchive(date){
 if(!state.report)return;
 ensureReportShape();
 saveActiveArchive();
 const key=dateKey(date),snap=state.report.archive[key];
 state.report.sciences=snap?Object.assign({},snap.sciences||{}):{};
 state.report.syntheses=snap?Object.assign({},snap.syntheses||{}):{};
 state.report.date=key;
}
function saveGeneratedPrediction(sci,period,date,result){
 ensureReportShape();
 const key=dateKey(date),cutoff=new Date(key+'T00:00:00').getTime();
 result.createdAt=Date.now();
 const old=state.report.predictions[key]||{createdAt:result.createdAt,sciences:{}};
 old.sciences=old.sciences||{};
 old.sciences[sci.id]={headline:result.headline,lecture:result.lecture,facts:result.facts||[],createdAt:result.createdAt,period};
 if(!old.createdAt||result.createdAt<old.createdAt)old.createdAt=result.createdAt;
 state.report.predictions[key]=old;
}

/* ==================== REPORT ==================== */
const PERIODS=[['day','Jour'],['tomorrow','Demain'],['week','Semaine'],['month','Mois'],['quarter','Trim.'],['year','Année'],['decade','5 ans'],['life','Vie']];
function periodDate(period){
 const d=new Date(state.reportDate);
 if(period==='day')return d;
 if(period==='tomorrow')return addDays(d,1);
 if(period==='week')return d;
 if(period==='month')return new Date(d.getFullYear(),d.getMonth(),1);
 if(period==='quarter')return new Date(d.getFullYear(),Math.floor(d.getMonth()/3)*3,1);
 if(period==='year')return new Date(d.getFullYear(),0,1);
 if(period==='decade')return new Date(d.getFullYear(),0,1);
 return d;
}
function periodLabel(period){
 const d=state.reportDate;
 switch(period){
  case 'day':return frDate(d);
  case 'tomorrow':return 'Demain — '+frDate(addDays(d,1));
  case 'week':return 'Semaine '+isoWeek(d)+' · '+d.getFullYear();
  case 'month':return MONTHS_FR[d.getMonth()]+' '+d.getFullYear();
  case 'quarter':return 'T'+quarterOf(d)+' '+d.getFullYear();
  case 'year':return 'Année '+d.getFullYear();
  case 'decade':return d.getFullYear()+' → '+(d.getFullYear()+5);
  case 'life':return 'Vie entière';
 }
 return '';
}

function renderReport(){
 if(!state.report||!state.calc){toast('Aucun rapport.','err');return;}
 ensureReportShape();
 const requested=dateKey(state.reportDate);
 state.report.archive=state.report.archive||{};
 state.report.date=state.report.date||requested;
 if(state.report.date!==requested){
  state.report.archive[state.report.date]={sciences:state.report.sciences||{},syntheses:state.report.syntheses||{}};
  const snap=state.report.archive[requested];
  state.report.sciences=snap?Object.assign({},snap.sciences||{}):{};
  state.report.syntheses=snap?Object.assign({},snap.syntheses||{}):{};
  state.report.date=requested;
 }
 state.report.validationHistory=Array.isArray(state.report.validationHistory)?state.report.validationHistory:[];
 state.report.predictions=state.report.predictions||{};
 state.report.knownDays=state.report.knownDays||{};
 writeLS(LS.report,state.report);
 const c=state.calc,p=state.profile,sel=getSciencesSelected();
 const hero=$('#reportHero');
 if(hero)hero.innerHTML=`<h1>${esc(p.prenomUsuel||'vous')} — ${periodLabel(state.reportPeriod)}</h1>
  <div class="subtitle">${sel.length} traditions · données calculées, interprétations symboliques et validations séparées</div>
  <div class="meta">
   <span class="meta-pill">☉ ${esc(sunSign(c))}</span>
   <span class="meta-pill">☽ ${esc(moonSign(c))}</span>
   ${c.ascSign?`<span class="meta-pill">↑ ${esc(c.ascSign)}</span>`:''}
   <span class="meta-pill">Chemin ${c.num.lp}</span>
   <span class="meta-pill">${esc(c.bazi.year.animal+' '+c.bazi.year.stemEl)}</span>
  </div>
  <div class="lifeline">
   <div class="row">
    <div class="stat"><div class="v">${c.birth.age} ans</div><div class="l">Âge calculé</div></div>
    <div class="stat"><div class="v">${sel.length}</div><div class="l">Disciplines choisies</div></div>
    <div class="stat"><div class="v">${Object.keys(state.report.sciences||{}).length}</div><div class="l">Analyses enregistrées</div></div>
    <div class="stat"><div class="v">—</div><div class="l">Espérance de vie non estimable</div></div>
   </div>
  </div>`;
 renderDateNav();
 renderCalendarCompact();
 renderValidationTable();
 renderSynthesis();
 renderRetroCard();
 renderSciGrid();
}
function renderDateNav(){
 const el=$('#dateNav');if(!el)return;
 const selCount=getSelected().length;
 el.innerHTML=`
  <button class="nav-btn" id="datePrev" title="Jour précédent"><i class="bi bi-chevron-left"></i></button>
  <input type="date" class="date-input" id="datePicker" value="${dateKey(state.reportDate)}">
  <button class="nav-btn" id="dateNext" title="Jour suivant"><i class="bi bi-chevron-right"></i></button>
  <button class="nav-btn" id="dateToday"><i class="bi bi-calendar-check"></i> Aujourd'hui</button>
  <div class="period-pills">
   ${PERIODS.map(([k,l])=>{
    const has=state.report.syntheses&&state.report.syntheses[k];
    return `<button class="period-pill ${state.reportPeriod===k?'active':''}" data-period="${k}">${l}${has?'<span class="dot"></span>':''}</button>`;
   }).join('')}
  </div>
  <button class="nav-btn primary" id="btnSciSelectNav"><i class="bi bi-sliders"></i> ${selCount}/${SCIENCES.length}</button>
  <button class="nav-btn success" id="btnAnalyzeNav"><i class="bi bi-lightning-charge"></i> Analyser</button>
 `;
 $('#datePrev').onclick=()=>navigateDate(-1);
 $('#dateNext').onclick=()=>navigateDate(1);
 $('#dateToday').onclick=()=>{state.reportDate=new Date();state.reportPeriod='day';state.calendarMonth=state.reportDate.getMonth();state.calendarYear=state.reportDate.getFullYear();renderReport();};
 $('#datePicker').onchange=e=>{
  const v=e.target.value;if(!v)return;
  const [y,m,d]=v.split('-').map(Number);
  state.reportDate=new Date(y,m-1,d);state.reportPeriod='day';
  state.calendarMonth=m-1;state.calendarYear=y;
  renderReport();
 };
 $$('.period-pill[data-period]').forEach(b=>b.onclick=()=>{state.reportPeriod=b.dataset.period;renderReport();});
 $('#btnSciSelectNav').onclick=openScienceSelector;
 $('#btnAnalyzeNav').onclick=()=>analyzePeriod(state.reportPeriod);
}

function navigateDate(offset){
 state.reportDate=addDays(state.reportDate,offset);
 state.reportPeriod='day';
 state.calendarMonth=state.reportDate.getMonth();
 state.calendarYear=state.reportDate.getFullYear();
 renderReport();
}

function renderCalendarCompact(){
 const slot=$('#calendarSlot');if(!slot)return;
 const y=state.calendarYear,m=state.calendarMonth;
 const first=new Date(y,m,1),startDow=(first.getDay()+6)%7,daysInMonth=new Date(y,m+1,0).getDate();
 const today=new Date(),known=state.report&&state.report.knownDays||{},history=state.report&&state.report.validationHistory||[];
 let cells='';
 for(let i=0;i<startDow;i++)cells+='<div class="cal-day other"></div>';
 for(let d=1;d<=daysInMonth;d++){
  const dt=new Date(y,m,d),dk=dateKey(dt);
  const vals=history.filter(v=>v.date===dk&&v.prospective&&['confirme','infirme','partiel'].includes(v.result));
  const yes=vals.filter(v=>v.result==='confirme').length,no=vals.filter(v=>v.result==='infirme').length,part=vals.filter(v=>v.result==='partiel').length;
  const measured=vals.length>0;
  const score=measured?Math.round((yes+part*.5)/vals.length*100):null;
  const tier=measured?(yes>no?'high':no>yes?'low':'med'):'neutral';
  const mark=measured?(yes>no?'🟢':no>yes?'🔴':'🟡'):'·';
  const isToday=today.getFullYear()===y&&today.getMonth()===m&&today.getDate()===d;
  const isSel=state.reportDate.getFullYear()===y&&state.reportDate.getMonth()===m&&state.reportDate.getDate()===d;
  const cls=['cal-day','score-'+tier,isToday?'today':'',isSel?'sel':''].filter(Boolean).join(' ');
  const tip=measured?`${yes} confirmée(s), ${no} infirmée(s), ${part} partielle(s) · taux descriptif ${score}%`:'Aucune validation prospective enregistrée';
  cells+=`<div class="${cls}" data-date="${dk}" title="${esc(frDate(dt)+' — '+tip)}">${d}<span class="em">${mark}</span>${known[dk]?'<span class="dot"></span>':''}</div>`;
 }
 const monthName=MONTHS_FR[m].charAt(0).toUpperCase()+MONTHS_FR[m].slice(1);
 slot.innerHTML=`<div class="calendar-card">
  <div class="calendar-head"><div class="calendar-title">${monthName} ${y}</div>
   <div class="cal-nav-btns"><button id="calPrevC" title="Mois précédent">‹</button><button id="calTodayC" title="Aujourd'hui">●</button><button id="calNextC" title="Mois suivant">›</button></div>
  </div>
  <div class="calendar-grid">${DOW_SHORT.map(d=>`<div class="cal-dow">${d}</div>`).join('')}${cells}</div>
  <div class="calendar-legend">
   <span>🟢 Plus de confirmations</span><span>🟡 Résultats partagés</span><span>🔴 Plus d’infirmations</span><span>· Non mesuré</span>
  </div>
  <button class="btn-brand calendar-analyze" id="btnCalAnalyze"><i class="bi bi-lightning-charge"></i> Analyser le ${esc(frDate(state.reportDate))}</button>
  <div class="calendar-hint">Cliquez un jour pour consulter son dossier · ${getSciencesSelected().length} sciences sélectionnées</div>
 </div>`;
 $('#calPrevC').onclick=()=>{state.calendarMonth--;if(state.calendarMonth<0){state.calendarMonth=11;state.calendarYear--;}renderCalendarCompact();};
 $('#calNextC').onclick=()=>{state.calendarMonth++;if(state.calendarMonth>11){state.calendarMonth=0;state.calendarYear++;}renderCalendarCompact();};
 $('#calTodayC').onclick=()=>{state.reportDate=new Date();state.reportPeriod='day';state.calendarMonth=state.reportDate.getMonth();state.calendarYear=state.reportDate.getFullYear();renderReport();};
 $$('#calendarSlot .cal-day[data-date]:not(.other)').forEach(el=>{el.onclick=()=>{const [yy,mm,dd]=el.dataset.date.split('-').map(Number);state.reportDate=new Date(yy,mm-1,dd);state.reportPeriod='day';renderReport();};});
 $('#btnCalAnalyze').onclick=()=>analyzePeriod('day');
}

function renderValidationTable(){
 const slot=$('#scoreTableSlot');if(!slot)return;
 const dateKeyNow=dateKey(state.reportDate),history=state.report.validationHistory||[],sels=getSciencesSelected();
 const rows=sels.map(sci=>{
  const vals=history.filter(v=>v.scienceId===sci.id&&v.date===dateKeyNow&&v.prospective&&['confirme','infirme','partiel'].includes(v.result));
  const yes=vals.filter(v=>v.result==='confirme').length,no=vals.filter(v=>v.result==='infirme').length,part=vals.filter(v=>v.result==='partiel').length;
  const score=vals.length?Math.round((yes+part*.5)/vals.length*100):null;
  const entry=state.report.sciences&&state.report.sciences[sci.id];
  const summary=entry&&(entry.periods&&entry.periods[state.reportPeriod]||(state.reportPeriod==='day'?entry.annual:null));
  return{sci,vals,yes,no,part,score,headline:summary?summary.headline:'—'};
 });
 const measured=rows.filter(r=>r.score!==null),avg=measured.length?Math.round(measured.reduce((a,r)=>a+r.score,0)/measured.length):null;
 slot.innerHTML=`<div class="score-card">
  <h3><i class="bi bi-bar-chart-fill"></i> Vérification des prévisions — ${esc(frDate(state.reportDate))}<span class="pill pill-soft" style="margin-left:auto">${measured.length}/${sels.length} mesurées</span></h3>
  <div class="score-summary">
   <div class="score-big">${avg===null?'—':avg+'%'}</div>
   <div class="score-verdict">${avg===null?'Aucune mesure prospective pour cette date.':`Taux descriptif moyen : ${avg}%`}</div>
   <div style="font-size:.76rem;color:var(--muted);max-width:260px">Confirmée = 1 · partielle = 0,5 · infirmée = 0. Ce taux ne prouve pas une capacité prédictive.</div>
  </div>
  <div style="overflow-x:auto"><table class="score-table">
   <thead><tr><th>Science</th><th>Confirmées</th><th>Partielles</th><th>Infirmées</th><th>Taux</th><th>Analyse</th></tr></thead>
   <tbody>${rows.map(r=>`<tr data-sci="${r.sci.id}">
    <td><div class="nm"><span class="ic" style="background:${r.sci.color}"><i class="bi ${r.sci.icon}"></i></span>${esc(r.sci.name)}</div></td>
    <td class="num">${r.yes}</td><td class="num">${r.part}</td><td class="num">${r.no}</td>
    <td class="num">${r.score===null?'—':r.score+'%'}</td><td class="headline">${esc(r.headline)}</td>
   </tr>`).join('')}</tbody>
  </table></div>
  <p class="hint mb-0 mt-2">Une prévision n’est comptabilisée que si elle a été enregistrée avant le début de la date évaluée et validée manuellement par vous.</p>
 </div>`;
 $$('#scoreTableSlot tbody tr').forEach(tr=>{tr.onclick=()=>{const id=tr.dataset.sci;const entry=state.report.sciences[id];if(!entry){toast('Aucune analyse pour cette discipline à cette date.','warn');return;}openDetail(id);};});
}

function renderGrandBilan(g){
 const list=(arr)=>safeTextList(arr,8).map(x=>'<li>'+esc(x)+'</li>').join('')||'<li>Non renseigné dans le dossier.</li>';
 const section=(title,content,wide=false)=>`<section class="gr-section ${wide?'wide':''}"><h3>${title}</h3>${content}</section>`;
 return `<article class="grand-report">
  <div class="gr-head"><div class="gr-icon"><i class="bi bi-journal-richtext"></i></div><div><div class="gr-kicker">Rapport transversal · lecture approfondie</div><h2>${esc(g.titre||'Bilan des bilans')}</h2><div class="gr-scope">${esc(g.periode||'Périmètre des archives disponibles')} · ${g.dateCount||0} date(s) · ${g.scienceCount||0} discipline(s) ${g.fallback?'· rapport de secours':''}</div></div></div>
  <p class="gr-lead">${esc(g.resume)}</p>
  <div class="gr-grid">
   ${section('Convergences prudentes','<ul>'+list(g.convergences)+'</ul>')}
   ${section('Divergences et tensions','<ul>'+list(g.divergences)+'</ul>')}
   ${section('Analyse transversale',`<p>${esc(g.analyse)}</p>`,true)}
   ${section('Solidité des résultats et limites',`<p>${esc(g.solidite)}</p>`,true)}
   ${section('Questions pour poursuivre la réflexion','<ul>'+list(g.questions)+'</ul>',true)}
  </div>
  <div class="gr-plan">
   <div><b>Court terme</b><p>${esc(g.plan.court||'—')}</p></div>
   <div><b>Moyen terme</b><p>${esc(g.plan.moyen||'—')}</p></div>
   <div><b>Long terme</b><p>${esc(g.plan.long||'—')}</p></div>
  </div>
  <div class="gr-section wide" style="margin-top:12px"><h3>Conclusion générale</h3><p>${esc(g.conclusion)}</p></div>
  <div class="gr-note">Ce bilan confronte des méthodes de statuts différents. Une répétition symbolique n'est pas une validation scientifique. Les calculs ne sont vérifiables que dans la limite des paramètres et algorithmes effectivement utilisés. Ce document ne constitue ni un diagnostic ni une prédiction.</div>
  <div class="gr-foot"><span class="gr-scope">Généré le ${new Date(g.generatedAt||Date.now()).toLocaleString('fr-FR')}</span><button class="btn-ghost btn-sm" id="btnRebuildGrand"><i class="bi bi-arrow-repeat"></i> Actualiser le bilan transversal</button></div>
 </article>`;
}
function renderExpertDetail(a){
 const blocks=[['Cadre et statut',a.cadre],['Données disponibles',a.donnees],['Interprétation dans la tradition',a.interpretation],['Limites et incertitudes',a.limites]];
 const html=blocks.filter(x=>x[1]).map(([t,v])=>`<section class="de-block"><h5>${t}</h5><p>${esc(v)}</p></section>`).join('');
 const apps=safeTextList(a.applications,4);
 return html||apps.length?`<div class="detail-expert">${html}${apps.length?`<section class="de-block"><h5>Pistes de réflexion</h5><ul>${apps.map(x=>'<li>'+esc(x)+'</li>').join('')}</ul></section>`:''}</div>`:'';
}

function renderSynthesis(){
 const slot=$('#synthesisSlot');if(!slot)return;
 const period=state.reportPeriod;
 const synth=normalizeSynthesis(state.report.syntheses&&state.report.syntheses[period]);
 const grand=normalizeGrandBilan(state.report.grandBilan);
 const periodName=period==='day'?'du jour':period==='tomorrow'?'de demain':period==='week'?'de la semaine':period==='month'?'du mois':period==='quarter'?'du trimestre':period==='year'?'annuelle':period==='decade'?'des 5 prochaines années':'de vie';
 let html='';
 if(period==='day'){
  if(grand)html+=renderGrandBilan(grand);
  else html+=`<div class="synthesis-card pending"><h2><i class="bi bi-journal-richtext"></i> Bilan des bilans — rapport transversal</h2><p class="text-muted mb-3" style="font-size:.88rem">Ce rapport ne résume pas seulement la journée. Il confronte les analyses archivées, leurs méthodes, leurs accords et leurs contradictions. Il sera d'autant plus complet que le dossier contiendra plusieurs dates et disciplines.</p><button class="btn-brand" id="btnGenGrand" ${collectGrandCorpus().length?'':'disabled'}><i class="bi bi-stars"></i> Construire le bilan des bilans</button><div class="hint mt-2">${collectGrandCorpus().length} analyse(s) exploitable(s) dans les archives.</div></div>`;
 }
 if(synth){
  const isFallback=synth.fallback;
  html+=`<div class="synthesis-card ${isFallback?'fallback':''}">
   <h2><i class="bi bi-stars"></i> Synthèse ${periodName} <span class="badge-ai">${isFallback?'Secours':'IA'}</span></h2>
   <div class="fil">${esc(synth.fil)}</div>
   <div class="themes">${synth.themes.map(t=>'<span class="theme-chip">'+esc(t)+'</span>').join('')}</div>
   <div class="plan">
    <div class="plan-item"><div class="k">Horizon mensuel</div><ul>${safeTextList(synth.plan.mois,4).map(x=>'<li>'+esc(x)+'</li>').join('')||'<li>—</li>'}</ul></div>
    <div class="plan-item"><div class="k">Horizon hebdomadaire</div><ul>${safeTextList(synth.plan.semaine,4).map(x=>'<li>'+esc(x)+'</li>').join('')||'<li>—</li>'}</ul></div>
    <div class="plan-item"><div class="k">À l'échelle du jour</div><ul>${safeTextList(synth.plan.jour,4).map(x=>'<li>'+esc(x)+'</li>').join('')||'<li>—</li>'}</ul></div>
   </div>
   ${synth.mantra?`<div class="mantra">« ${esc(synth.mantra)} »</div>`:''}
  </div>`;
 }else if(period!=='day'){
  html+=`<div class="synthesis-card pending"><h2><i class="bi bi-hourglass-split"></i> Synthèse ${periodName} non générée</h2><button class="btn-brand" id="btnGenSynth"><i class="bi bi-stars"></i> Générer la synthèse ${periodName}</button></div>`;
 }else{
  html+=`<div class="synthesis-card pending"><h2><i class="bi bi-hourglass-split"></i> Synthèse du jour non générée</h2><p class="text-muted">Lancez l'analyse quotidienne pour obtenir la lecture de cette date.</p><button class="btn-brand" id="btnGenSynth"><i class="bi bi-stars"></i> Analyser ce jour</button></div>`;
 }
 slot.innerHTML=html;
 const gb=$('#btnGenGrand');if(gb)gb.onclick=async()=>{gb.disabled=true;gb.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Lecture transversale…';try{await generateGrandBilan();renderReport();toast('Bilan des bilans généré.','ok');}catch(e){toast('Bilan impossible : '+e.message,'err');gb.disabled=false;gb.innerHTML='<i class="bi bi-stars"></i> Réessayer';}};
 const rb=$('#btnRebuildGrand');if(rb)rb.onclick=async()=>{rb.disabled=true;rb.textContent='Actualisation…';try{await generateGrandBilan();renderReport();toast('Bilan transversal actualisé.','ok');}catch(e){toast(e.message,'err');rb.disabled=false;rb.textContent='Réessayer';}};
 const b=$('#btnGenSynth');if(b)b.onclick=()=>{if(period==='day')analyzePeriod('day');else generateSynthForPeriod(period);};
}
function renderRetroCard(){
 const slot=$('#retroSlot');if(!slot)return;
 slot.innerHTML=`
  <div class="retro-card">
   <div class="retro-head" id="retroHead">
    <i class="bi bi-clock-history"></i> Valider une prédiction passée
    <span class="chevron">▾</span>
   </div>
   <div class="retro-body" id="retroBody">
    <div class="retro-form">
     <p style="font-size:.85rem;color:var(--muted);margin:0">Choisissez une date passée. EsotherIA cherchera d’abord une prévision réellement archivée avant cette date. Sans prévision antérieure, la comparaison sera explicitement rétrospective et ne comptera dans aucun score.</p>
     <div class="retro-row">
      <div><label>Date passée</label><input type="date" class="form-control" id="retroDate" max="${dateKey(new Date())}" value="${state.retroResults?state.retroResults.date:dateKey(addDays(new Date(),-30))}"></div>
      <button class="btn-brand" id="btnRetroLaunch" type="button"><i class="bi bi-search"></i> Évaluer</button>
     </div>
     <div><label>Ce qui s'est passé de marquant</label><textarea class="form-control" id="retroEvent" rows="3" placeholder="Ex : j'ai eu un entretien décisif, une dispute avec un proche...">${state.retroResults?esc(state.retroResults.event):''}</textarea></div>
    </div>
    <div id="retroResults"></div>
   </div>
  </div>
 `;
 $('#retroHead').onclick=()=>{
  const b=$('#retroBody');const h=$('#retroHead');if(!b)return;
  b.style.display=b.style.display==='none'?'block':'none';
  h.classList.toggle('open');
 };
 if(state.retroResults)renderRetroResults();
 $('#btnRetroLaunch').onclick=runRetroValidation;
}

async function runRetroValidation(){
 const dateStr=$('#retroDate').value,event=$('#retroEvent').value.trim();
 if(!dateStr){toast('Choisissez une date.','err');return;}
 if(!event){toast('Décrivez ce qui s\'est passé.','err');return;}
 if(!AI.count()){toast('Clé Agnes requise pour cette analyse.','err');return;}
 const prediction=state.report.predictions&&state.report.predictions[dateStr];
 const dayStart=new Date(dateStr+'T00:00:00').getTime();
 const sels=getSciencesSelected();
 const prospectiveIds=sels.filter(sc=>{
  const p=prediction&&prediction.sciences&&prediction.sciences[sc.id];
  return !!(p&&(p.createdAt||prediction.createdAt)<dayStart);
 }).map(sc=>sc.id);
 const predictionTimes={};
 prospectiveIds.forEach(id=>{const p=prediction.sciences[id];predictionTimes[id]=p.createdAt||prediction.createdAt;});
 const factsBlock=sels.map(sci=>{
  const saved=prospectiveIds.includes(sci.id)&&prediction.sciences[sci.id];
  if(saved)return `- ${sci.name} (id:${sci.id}) — PRÉVISION ARCHIVÉE AVANT LA DATE : ${saved.headline}. ${saved.lecture||''} Données : ${(saved.facts||[]).join(' ; ')}`;
  try{const comp=sci.compute('day',state.calc,state.profile,state.picks,new Date(dateStr+'T12:00:00'));return `- ${sci.name} (id:${sci.id}) — RECONSTITUTION APRÈS COUP : ${comp.facts.join(' ; ')}`;}
  catch(e){return `- ${sci.name} (id:${sci.id}) : données indisponibles`;}
 }).join('\\n');
 const protocol=prospectiveIds.length
  ? `Seules les disciplines suivantes possèdent une prévision horodatée avant le début de la date : ${prospectiveIds.join(', ')}. Compare ces prévisions archivées à l’événement. Pour les autres disciplines, indique explicitement "non_verifiable" et n’évalue aucune réussite. Cite un élément concret de chaque prévision.`
  : 'Aucune prévision horodatée avant le début de cette date n’est disponible. Il s’agit uniquement d’une reconstitution après coup, exposée au biais rétrospectif. Ne donne aucun verdict de réussite, aucun pourcentage et aucune conclusion sur la capacité prédictive. Décris seulement les ressemblances possibles et les éléments absents.';
 const btn=$('#btnRetroLaunch');if(btn){btn.disabled=true;btn.innerHTML='<span class="spinner-border spinner-border-sm me-2"></span>Comparaison…';}
 try{
  const prompt=`ÉVÉNEMENT DÉCRIT PAR L’UTILISATEUR pour le ${dateStr} : "${event}"

DONNÉES À COMPARER :
${factsBlock}

PROTOCOLE :
${protocol}

Pour chaque discipline, donne un statut de rapprochement "juste|faux|partiel|non_verifiable" et une justification précise. Si aucun passage concret ne soutient le rapprochement, ne le présente pas comme une correspondance.
JSON strict :
{"sciences":[{"id":"...","verdict":"juste|faux|partiel|non_verifiable","reason":"...","evidence":"extrait précis de la prévision ou donnée pertinente"}],"summary":"résumé méthodologique prudent"}`;
  const out=await AI.chat(prompt,{maxTokens:2200,timeoutMs:130000,temperature:0.15,system:'Tu es un évaluateur méthodologique impartial. Tu ne fabriques aucune preuve. Tu distingues strictement les prévisions archivées avant les faits des reconstitutions rétrospectives. Réponds uniquement en JSON.'});
  const j=robustParseJSON(out);
  if(!j||!Array.isArray(j.sciences))throw new Error('Réponse invalide');
  state.retroResults={date:dateStr,event,verdicts:j.sciences,summary:j.summary||'',at:Date.now(),prospective:prospectiveIds.length>0,prospectiveIds,predictionTimes};
  renderRetroResults();
  toast(prospectiveIds.length?'Comparaison prospective prête à vérifier.':'Comparaison rétrospective exploratoire : aucun score ne sera attribué.','warn');
 }catch(e){toast('Échec : '+e.message,'err');}
 if(btn){btn.disabled=false;btn.innerHTML='<i class="bi bi-search me-1"></i> Évaluer';}
}
function renderRetroResults(){
 const box=$('#retroResults');if(!box||!state.retroResults)return;
 const r=state.retroResults,byId={};(r.verdicts||[]).forEach(v=>byId[v.id]=v);
 const sels=getSciencesSelected(),ids=new Set(r.prospectiveIds||[]);
 const rows=sels.map(sci=>({sci,...(byId[sci.id]||{verdict:'non_verifiable',reason:'Aucune correspondance proposée.'})}));
 const label={juste:'Rapprochement proposé',partiel:'Rapprochement partiel',faux:'Aucun rapprochement',non_verifiable:'Non vérifiable'};
 box.innerHTML=`
  <div class="retro-summary ${ids.size?'':'bad'}">
   <b>${esc(r.date)}</b> · ${ids.size?ids.size+' discipline(s) avec prévision archivée avant la date':'Reconstitution après coup : résultat exploratoire, non comptabilisé'}
   <div style="margin-top:.4rem;font-size:.85rem">${esc(r.summary||'Les ressemblances proposées ne constituent pas une preuve de capacité prédictive.')}</div>
  </div>
  <table class="verdict-table"><thead><tr><th>Discipline</th><th>Analyse IA</th><th>Justification / élément</th><th>Validation</th></tr></thead><tbody>
  ${rows.map(row=>{const canValidate=ids.has(row.sci.id);return `<tr><td><b>${esc(row.sci.name)}</b></td>
   <td><span class="verdict-badge ${row.verdict==='juste'?'juste':row.verdict==='partiel'?'partiel':row.verdict==='faux'?'faux':'non-verifiable'}">${esc(label[row.verdict]||'Non vérifiable')}</span></td>
   <td style="font-size:.8rem;color:var(--muted)">${esc(row.reason||'')}${row.evidence?'<div class="hint mt-1">Élément : '+esc(row.evidence)+'</div>':''}</td>
   <td>${canValidate?`<select class="form-select form-select-sm retro-confirm" data-sci="${row.sci.id}"><option value="">À vérifier</option><option value="confirme">Correspondance confirmée</option><option value="partiel">Correspondance partielle</option><option value="infirme">Correspondance infirmée</option></select>`:'<span class="hint">Pas de prévision avant la date</span>'}</td>
  </tr>`;}).join('')}
  </tbody></table>
  ${ids.size?'<div class="text-end mt-3"><button class="btn btn-brand" id="btnSaveRetroValidation">Enregistrer mes validations</button></div>':'<p class="hint mt-2">Pour mesurer une performance dans le temps, archivez les prévisions avant la date concernée. Une analyse générée aujourd’hui pour une date passée ne peut pas être comptée comme prédiction réussie.</p>'}`;
 const save=$('#btnSaveRetroValidation');
 if(save)save.onclick=()=>{
  state.report.validationHistory=Array.isArray(state.report.validationHistory)?state.report.validationHistory:[];
  $$('#retroResults .retro-confirm').forEach(sel=>{
   if(!sel.value)return;
   state.report.validationHistory=state.report.validationHistory.filter(v=>!(v.date===r.date&&v.scienceId===sel.dataset.sci&&v.prospective));
   state.report.validationHistory.push({date:r.date,scienceId:sel.dataset.sci,result:sel.value,prospective:true,forecastAt:r.predictionTimes[sel.dataset.sci],validatedAt:Date.now(),event:r.event});
  });
  writeLS(LS.report,state.report);clearDayValidationCache();renderReport();
  renderRetroResults();
  toast('Validations enregistrées. Les scores reflètent vos contrôles manuels (partiel = demi-point).','ok');
 };
}

function renderSciGrid(){
 const grid=$('#sciGrid');if(!grid)return;
 const per=state.reportPeriod;
 const sel=getSciencesSelected();
 const all=state.report.sciences||{};
 const date=per==='day'?state.reportDate:periodDate(per);
 grid.innerHTML=sel.map(sci=>{
  const entry=all[sci.id];
  if(!entry||!(entry.periods&&entry.periods[per])&&!(per==='day'&&entry.annual)){
   return `<div class="sci-card" data-sci="${sci.id}" data-retry="1">
    <span class="status">à analyser</span>
    <div class="top"><div class="ic" style="background:${sci.color}"><i class="bi ${sci.icon}"></i></div><div><div class="nm">${esc(sci.name)}</div><div class="cat">${esc(sci.cat)}</div></div></div>
    <div class="snippet">${esc((entry&&entry.error)||'Aucun rapport archivé pour cette date et cette discipline.')}</div>
    <div class="go">Analyser cette discipline <i class="bi bi-arrow-clockwise"></i></div>
   </div>`;
  }
  const summary=(entry.periods&&entry.periods[per])||(per==='day'?entry.annual:null);
  const headline=summary?summary.headline:'—';
  const snippet=summary?String(summary.lecture||'').split('\n\n')[0]:'Cliquez pour générer cette période.';
  return `<div class="sci-card" data-sci="${sci.id}">
   <span class="status">${per==='day'?'jour':per==='tomorrow'?'demain':per==='week'?'sem.':per==='month'?'mois':per==='quarter'?'trim.':per==='year'?'année':per==='decade'?'5 ans':'vie'}</span>
   <div class="top"><div class="ic" style="background:${sci.color}"><i class="bi ${sci.icon}"></i></div><div><div class="nm">${esc(sci.name)}</div><div class="cat">${esc(sci.cat)}</div></div></div>
   <div class="headline">${esc(headline)}</div>
   <div class="snippet">${esc(snippet).slice(0,200)}</div>
   <div class="go">Détail <i class="bi bi-arrow-right"></i></div>
  </div>`;
 }).join('');
 $$('#sciGrid .sci-card').forEach(card=>{
  if(card.dataset.retry){card.onclick=()=>retryScience(card.dataset.sci);return;}
  card.onclick=()=>openDetail(card.dataset.sci);
 });
}

async function retryScience(id){
 const sci=SCIENCES.find(s=>s.id===id);if(!sci)return;
 if(!AI.count()){toast('Clé Agnes requise.','err');return;}
 const period=state.reportPeriod||'day',date=period==='day'?new Date(state.reportDate):periodDate(period);
 activateArchive(date);
 toast('Génération de '+sci.name+'…','warn');
 try{
  const r=await generateOne(sci,period,date);
  if(!state.report.sciences[id])state.report.sciences[id]={annual:null,periods:{}};
  if(period==='day')state.report.sciences[id].annual=r;
  state.report.sciences[id].periods=state.report.sciences[id].periods||{};
  state.report.sciences[id].periods[period]=r;
  saveGeneratedPrediction(sci,period,date,r);
  state.report.errors=Array.isArray(state.report.errors)?state.report.errors:[];
  const idx=state.report.errors.findIndex(e=>e.id===id);if(idx>=0)state.report.errors.splice(idx,1);
  state.report.date=dateKey(date);saveActiveArchive();writeLS(LS.report,state.report);renderReport();
  toast(sci.name+' : analyse prête','ok');
 }catch(e){toast('Échec : '+e.message,'err');}
}

async function analyzePeriod(period){
 if(!AI.count()){toast('Clé Agnes requise.','err');return;}
 if(!state.report)state.report={sciences:{},syntheses:{},archive:{},predictions:{},validationHistory:[],knownDays:{},errors:[],date:dateKey(state.reportDate)};
 const sels=getSciencesSelected();
 if(!sels.length){toast('Sélectionnez au moins une science.','err');return;}
 const date=period==='day'?new Date(state.reportDate):periodDate(period);
 activateArchive(date);
 showView('analyzing');buildAgentGrid();
 log('Analyse '+periodLabel(period)+' — '+sels.length+' sciences');
 await mapLimit(sels,AI.concurrency(),async(sci)=>{
  setAgent(sci.id,'run','Génération…');
  try{
   const r=await generateOne(sci,period,date);
   if(!state.report.sciences[sci.id])state.report.sciences[sci.id]={annual:(period==='day'?r:null),periods:{}};
   if(period==='day')state.report.sciences[sci.id].annual=r;
   state.report.sciences[sci.id].periods[period]=r;
   saveGeneratedPrediction(sci,period,date,r);
   setAgent(sci.id,'done','Prêt');
  }catch(e){
   if(!state.report.sciences[sci.id])state.report.sciences[sci.id]={annual:null,periods:{},error:e.message};
   state.report.sciences[sci.id].error=e.message;
   setAgent(sci.id,'err',e.message.slice(0,30));log(sci.name+' : '+e.message);
  }
  stepDone();saveActiveArchive();writeLS(LS.report,state.report);
 });
 setAgent('synth','run','Synthèse…');
 const successful=sels.filter(s=>{const e=state.report.sciences[s.id];return e&&(period==='day'?e.annual:(e.periods&&e.periods[period]));});
 if(successful.length>=1){
  try{
   const synth=await generateSynthesis(period,date,successful);
   state.report.syntheses[period]=synth;
   setAgent('synth','done','Prête');
  }catch(e){
   const fallback=fallbackSynthesis(successful,period);
   state.report.syntheses[period]=fallback;
   setAgent('synth','done','Fallback');
  }
 }else setAgent('synth','err','Aucune science réussie');
 if(successful.length){
  setAgent('synth','run','Bilan transversal…');
  try{await generateGrandBilan();setAgent('synth','done','Rapport complet prêt');}
  catch(e){state.report.grandBilan=fallbackGrandBilan(collectGrandCorpus());writeLS(LS.report,state.report);setAgent('synth','done','Bilan de secours');log('Bilan transversal : '+e.message);}
 }
 stepDone();state.report.at=Date.now();state.report.date=dateKey(date);
 state.report.knownDays[dateKey(date)]=true;
 saveActiveArchive();
 state.reportPeriod=period;state.reportDate=date;
 writeLS(LS.report,state.report);writeLS(LS.reportAt,Date.now());
 showView('report');renderReport();
 toast('Analyse '+periodLabel(period)+' terminée.','ok');
}

async function generateSynthForPeriod(period){
 const sels=getSciencesSelected();
 const successful=sels.filter(sc=>{const e=state.report.sciences[sc.id];return e&&(period==='day'?e.annual:(e.periods&&e.periods[period]));});
 if(!successful.length){toast('Aucune analyse de cette période pour cette date.','err');return;}
 toast('Génération…','warn');
 try{
  const synth=await generateSynthesis(period,periodDate(period),successful);
  state.report.syntheses[period]=synth;
  state.report.date=dateKey(state.reportDate);saveActiveArchive();writeLS(LS.report,state.report);renderReport();
  toast('Synthèse prête.','ok');
 }catch(e){
  state.report.syntheses[period]=fallbackSynthesis(successful,period);
  state.report.date=dateKey(state.reportDate);saveActiveArchive();writeLS(LS.report,state.report);renderReport();
  toast('Synthèse de secours prête.','warn');
 }
}

/* ==================== SCIENCE SELECTOR MODAL ==================== */
function openScienceSelector(){
 const body=$('#sciSelectBody');if(!body)return;
 const cats={};SCIENCES.forEach(s=>{(cats[s.cat]=cats[s.cat]||[]).push(s);});
 const groups=['Astres','Nombres','Oracles','Occulte','Corps','Psyché','Nature'];
 let html=`<div class="sel-toolbar">
   <button class="big" id="btnModalSelectAll" type="button"><i class="bi bi-check-all me-1"></i> Tout (${SCIENCES.length})</button>
   <button class="btn-ghost btn-sm" id="btnModalSelectNone" type="button"><i class="bi bi-x-lg me-1"></i>Aucune</button>
   <button class="btn-ghost btn-sm" id="btnModalSelectDefault" type="button"><i class="bi bi-stars me-1"></i>Défaut</button>
   <span class="pill pill-soft ms-auto" id="modalSelCount"></span>
  </div>
  <div class="sci-select-grid" id="modalSciGrid">`;
 groups.forEach(g=>{
  if(!cats[g])return;
  html+=`<div class="sci-cat-header"><i class="bi bi-chevron-right"></i>${g}<span class="count">${cats[g].length}</span></div>`;
  cats[g].forEach(s=>{
   const on=getSelected().indexOf(s.id)>=0;
   html+=`<label class="sci-select ${on?'on':''}" data-sci-id="${s.id}">
     <input type="checkbox" ${on?'checked':''} data-sci-id="${s.id}">
     <div class="ic" style="background:${s.color}"><i class="bi ${s.icon}"></i></div>
     <div class="meta"><div class="nm">${esc(s.name)}</div><div class="cat">${esc(s.cat)}</div></div>
   </label>`;
  });
 });
 html+='</div>';
 body.innerHTML=html;
 const upd=()=>{
  const sel=new Set();$$('#modalSciGrid input:checked').forEach(cb=>sel.add(cb.dataset.sciId));
  $$('#modalSciGrid .sci-select').forEach(el=>el.classList.toggle('on',el.querySelector('input').checked));
  const cnt=$('#modalSelCount');if(cnt)cnt.innerHTML='<i class="bi bi-check2-circle"></i> '+sel.size+' / '+SCIENCES.length;
 };
 $('#modalSciGrid').addEventListener('change',upd);
 $('#btnModalSelectAll').onclick=()=>{$$('#modalSciGrid input').forEach(cb=>cb.checked=true);upd();};
 $('#btnModalSelectNone').onclick=()=>{$$('#modalSciGrid input').forEach(cb=>cb.checked=false);upd();};
 $('#btnModalSelectDefault').onclick=()=>{$$('#modalSciGrid input').forEach(cb=>{const s=SCIENCES.find(x=>x.id===cb.dataset.sciId);cb.checked=!!(s&&s.on);});upd();};
 upd();
 new bootstrap.Modal($('#sciSelectModal')).show();
 $('#btnApplySci').onclick=()=>{
  const sel=[];$$('#modalSciGrid input:checked').forEach(cb=>sel.push(cb.dataset.sciId));
  if(!sel.length){toast('Sélectionnez au moins une science.','err');return;}
  state.selectedSciences=sel;saveSel();clearDayValidationCache();
  bootstrap.Modal.getInstance($('#sciSelectModal')).hide();
  renderReport();
 };
}

/* ==================== DETAIL MODAL ==================== */
async function openDetail(id){
 const sci=SCIENCES.find(s=>s.id===id);if(!sci)return;
 const entry=state.report.sciences[id];
 if(!entry||(!entry.annual&&!(entry.periods&&Object.keys(entry.periods).length))){toast('Cette science n\'a pas été générée.','err');return;}
 state.detailSci=id;state.detailPeriod=state.reportPeriod||'day';
 const c=state.calc,p=state.profile,k=state.picks;
 $('#dmTitle').innerHTML=`<i class="bi ${sci.icon}" style="color:${sci.color}"></i> ${esc(sci.name)}`;
 let realFacts=[];
 try{realFacts=sci.compute(state.detailPeriod,c,p,k,periodDate(state.detailPeriod)).facts||[];}catch(e){realFacts=[];}
 const periodTabs=[['day','Jour'],['tomorrow','Demain'],['week','Semaine'],['month','Mois'],['quarter','Trim.'],['year','Année'],['decade','5 ans'],['life','Vie']];
 $('#dmBody').innerHTML=`<div class="sci-intro">${sci.intro.split('\n\n').map(x=>'<p>'+esc(x)+'</p>').join('')}</div>
  <div class="principles"><strong style="font-size:.85rem">Repères</strong><ul>${sci.principles.map(x=>'<li>'+esc(x)+'</li>').join('')}</ul></div>
  <div class="facts-box"><div class="ttl">Données réelles calculées</div><ul>${realFacts.map(f=>'<li>'+esc(f)+'</li>').join('')||'<li>—</li>'}</ul></div>
  <div class="period-tabs" id="periodTabs">${periodTabs.map(([k2,l])=>{const has=entry.periods&&entry.periods[k2];return `<button class="ptab" data-p="${k2}">${l}${has?'<span class="gen-dot"></span>':''}</button>`;}).join('')}</div>
  <div class="period-body" id="periodBody"></div>`;
 new bootstrap.Modal($('#detailModal')).show();
 $$('#periodTabs .ptab').forEach(b=>b.onclick=()=>renderDetailPeriod(id,b.dataset.p));
 renderDetailPeriod(id,state.detailPeriod);
}
async function renderDetailPeriod(id,period){
 const sci=SCIENCES.find(s=>s.id===id);const entry=state.report.sciences[id];
 $$('#periodTabs .ptab').forEach(b=>b.classList.toggle('active',b.dataset.p===period));
 const body=$('#periodBody');if(!body)return;
 const a=(entry&&entry.periods&&entry.periods[period])||(period==='day'&&entry?entry.annual:null);
 if(a){
  body.innerHTML=`<h4>${esc(a.headline)}</h4>${renderExpertDetail(a)}<div class="lecture">${String(a.lecture||'').split('\n\n').map(x=>'<p>'+esc(x)+'</p>').join('')}</div>${safeTextList(a.actions,4).length?`<div class="actions-box"><div class="ttl">Pistes concrètes</div><ul>${safeTextList(a.actions,4).map(x=>'<li>'+esc(x)+'</li>').join('')}</ul></div>`:''}`;
  return;
 }
 if(!AI.count()){body.innerHTML='<div class="err-box"><div class="ttl">Agnes requis</div>Ajoutez une clé Agnes.</div>';return;}
 body.innerHTML='<div class="d-flex align-items-center gap-2"><div class="spinner-brand sm"></div><span>Génération '+period+'…</span></div>';
 try{
  const r=await generateOne(sci,period,period==='day'?new Date(state.reportDate):periodDate(period));
  if(!entry.periods)entry.periods={};
  entry.periods[period]=r;
  saveGeneratedPrediction(sci,period,periodDate(period),r);state.report.date=dateKey(state.reportDate);saveActiveArchive();
  writeLS(LS.report,state.report);
  body.innerHTML=`<h4>${esc(r.headline)}</h4>${renderExpertDetail(r)}<div class="lecture">${String(r.lecture||'').split('\n\n').map(x=>'<p>'+esc(x)+'</p>').join('')}</div>${safeTextList(r.actions,4).length?`<div class="actions-box"><div class="ttl">Pistes concrètes</div><ul>${safeTextList(r.actions,4).map(x=>'<li>'+esc(x)+'</li>').join('')}</ul></div>`:''}`;
  swapIn(body);
 }catch(e){
  body.innerHTML='<div class="err-box"><div class="ttl">Erreur</div>'+esc(e.message)+'<div class="mt-2"><button class="btn-brand btn-sm" id="btnRetryPeriod">Réessayer</button></div></div>';
  const b=$('#btnRetryPeriod');if(b)b.onclick=()=>renderDetailPeriod(id,period);
 }
}

/* ==================== EXPORT/IMPORT ==================== */
function download(name,content,mime){const b=new Blob([content],{type:mime||'text/plain;charset=utf-8'});const u=URL.createObjectURL(b);const a=document.createElement('a');a.href=u;a.download=name;document.body.appendChild(a);a.click();a.remove();setTimeout(()=>URL.revokeObjectURL(u),1500);}
function dossier(){if(state.report)saveActiveArchive();return{app:'EsotherIA',version:12,exportedAt:new Date().toISOString(),profile:state.profile,picks:state.picks,report:state.report,selected:getSelected(),retroResults:state.retroResults};}
function buildReportHTML(){
 const R=state.report,p=state.profile;
 const parts=['<!doctype html><html lang="fr"><head><meta charset="utf-8"><title>Rapport '+(new Date(R.at).getFullYear())+' — '+esc(p.prenomUsuel||'')+'</title><style>body{font-family:Georgia,serif;max-width:760px;margin:40px auto;padding:0 20px;color:#111;line-height:1.7}h1{font-size:32px;text-align:center}h2{font-size:20px;color:#4f46e5;margin-top:34px;border-bottom:1px solid #ddd;padding-bottom:6px}p{margin:0 0 12px}.sub{text-align:center;color:#666;font-style:italic;margin-bottom:26px}.card{background:#f8faff;border:1px solid #e0e7ff;border-radius:12px;padding:16px 20px;margin-bottom:16px}.actions{background:#ecfdf5;border:1px solid #d1fae5;border-radius:10px;padding:10px 14px;font-size:14px}.facts{background:#eef2ff;border:1px solid #e0e7ff;border-radius:10px;padding:10px 14px;font-size:13px;font-family:monospace}.footer{text-align:center;color:#999;font-size:12px;margin-top:40px;border-top:1px solid #ddd;padding-top:14px}.plan{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;font-size:13px}.plan div{background:#fff;border:1px solid #e0e7ff;border-radius:10px;padding:10px}</style></head><body>'];
 parts.push('<h1>Rapport '+(new Date(R.at).toLocaleDateString('fr-FR'))+' — '+esc(p.prenomUsuel||'')+'</h1><div class="sub">'+Object.keys(R.sciences||{}).length+' traditions</div>');
 const synth=normalizeSynthesis(R.syntheses&&R.syntheses.day);
 if(synth){const s=synth;parts.push('<div class="card"><h2 style="margin-top:0">Synthèse</h2><p><i>'+esc(s.fil)+'</i></p><p><b>Thèmes :</b> '+s.themes.map(esc).join(' · ')+'</p><div class="plan"><div><b>Ce mois</b><ul>'+s.plan.mois.map(x=>'<li>'+esc(x)+'</li>').join('')+'</ul></div><div><b>Cette semaine</b><ul>'+s.plan.semaine.map(x=>'<li>'+esc(x)+'</li>').join('')+'</ul></div><div><b>Aujourd\'hui</b><ul>'+s.plan.jour.map(x=>'<li>'+esc(x)+'</li>').join('')+'</ul></div></div><p style="text-align:center;margin-top:12px"><i>« '+esc(s.mantra)+' »</i></p></div>');}
 Object.keys(R.sciences||{}).forEach(id=>{
  const e=R.sciences[id];if(!e||!e.annual)return;
  const sci=SCIENCES.find(s=>s.id===id);if(!sci)return;
  parts.push('<h2>'+esc(sci.name)+'</h2>');
  parts.push('<p><b>'+esc(e.annual.headline)+'</b></p>');
  parts.push('<div class="facts"><b>Données :</b><ul>'+safeTextList(e.annual.facts,20).map(f=>'<li>'+esc(f)+'</li>').join('')+'</ul></div>');
  parts.push(String(e.annual.lecture||'').split('\n\n').map(x=>'<p>'+esc(x)+'</p>').join(''));
  const exportActions=safeTextList(e.annual.actions,4);if(exportActions.length)parts.push('<div class="actions"><b>Actions :</b><ul>'+exportActions.map(x=>'<li>'+esc(x)+'</li>').join('')+'</ul></div>');
 });
 if(state.retroResults){const r=state.retroResults;parts.push('<h2>Validation rétrospective</h2>');parts.push('<p><b>'+esc(r.date)+'</b> — '+esc(r.event)+'</p>');}
 parts.push('<div class="footer">Généré le '+new Date().toLocaleString('fr-FR')+' · EsotherIA</div></body></html>');
 return parts.join('\n');
}
function importDossier(file){
 const r=new FileReader();
 r.onload=()=>{try{
  const d=JSON.parse(r.result);if(!d||d.app!=='EsotherIA')throw new Error('format inconnu');
  state.profile=d.profile||{};state.picks=Object.assign(blankPicks(),d.picks||{});if(!state.picks.images)state.picks.images={};
  normalizePicks();
  state.report=d.report||null;
  if(Array.isArray(d.selected)){state.selectedSciences=d.selected;saveSel();}
  state.retroResults=d.retroResults||null;
  saveProfile();savePicks();if(state.report){saveActiveArchive();writeLS(LS.report,state.report);}
  hydrate();const c=computeAll();state.calc=c.ok?c:null;
  clearDayValidationCache();
  if(state.report&&state.calc){state.reportDate=state.report.date?new Date(state.report.date+'T12:00:00'):new Date(state.report.at||Date.now());showView('report');renderReport();}
  else{goTo(0);showView('wizard');}
  toast('Dossier importé.','ok');
 }catch(e){toast('Dossier illisible : '+e.message,'err');}};
 r.readAsText(file);
}
function wipeAll(){
 if(!confirm('Effacer toutes vos données locales ? Action définitive.'))return;
 Object.values(LS).forEach(delLS);
 state.profile={};state.picks=blankPicks();state.report=null;state.calc=null;state.selectedSciences=null;state.retroResults=null;
 clearDayValidationCache();
 renderSlides();if($('#f-keys'))$('#f-keys').value='';AI.setKeys([]);hydrate();goTo(0);showView('wizard');initTrial();toast('Données effacées.','ok');
}

/* ==================== NEW QUESTION ==================== */
function openNewQuestion(){
 if(!state.report){toast('Faites d\'abord une analyse.','warn');return;}
 $('#nqQuestion').value=state.profile.question||'';
 $('#nqSituation').value=state.profile.situation||'';
 new bootstrap.Modal($('#newQModal')).show();
}
function confirmNewQuestion(){
 const q=$('#nqQuestion').value.trim();const sit=$('#nqSituation').value.trim();
 state.profile.question=q;state.profile.situation=sit;saveProfile();
 state.picks.tarot=[];state.picks.rune=null;state.picks.yijing=null;state.picks.geo=null;savePicks();
 state.report=null;state.reportPeriod='day';state.reportDate=new Date();state.retroResults=null;
 clearDayValidationCache();
 delLS(LS.report);delLS(LS.reportAt);
 const m=bootstrap.Modal.getInstance($('#newQModal'));if(m)m.hide();
 toast('Nouvelle question. Analyse en cours…','ok');
 runAnalysis();
}

/* ==================== TRIAL ==================== */
let trialTimer=null;
function initTrial(){
 let t=parseInt(localStorage.getItem(LS.trial)||'0',10);if(!t){t=Date.now();try{localStorage.setItem(LS.trial,String(t));}catch(e){}}
 const end=t+30*86400000;
 const upd=()=>{const left=end-Date.now();const b=$('#trialBadge');if(!b)return;if(left<=0){b.className='pill pill-rose';$('#trialText').textContent='Essai terminé';return;}b.className='pill pill-amber';$('#trialText').textContent='J-'+Math.floor(left/86400000)+' '+String(Math.floor((left%86400000)/3600000)).padStart(2,'0')+'h';};
 upd();if(trialTimer)clearInterval(trialTimer);trialTimer=setInterval(upd,60000);
}
function checkDailyWipe(){/* Conservation durable : aucune suppression automatique des rapports. */}

/* ==================== BIND ==================== */
function bind(){
 document.addEventListener('input',onField);
 document.addEventListener('change',onField);
 document.addEventListener('click',e=>{
  if(e.target.closest('[data-next]')){e.preventDefault();goNext();}
  else if(e.target.closest('[data-prev]')){e.preventDefault();goPrev();}
  else if(e.target.closest('#btnClearKeys')){$('#f-keys').value='';AI.setKeys([]);writeLS(LS.keys,[]);renderKeysCount();toast('Clés effacées.','ok');}
  else if(e.target.closest('#btnTestKey')){
   const ks=parseKeys($('#f-keys').value);
   if(!ks.length){toast('Collez d\'abord une clé.','warn');return;}
   const b=$('#btnTestKey');b.disabled=true;
   AI.test(ks[0].key).then(r=>{b.disabled=false;if(r.ok)toast('Agnes OK.','ok');else toast('Échec : '+r.msg,'err');});
  }
  else if(e.target.closest('#btnDrawTarot'))drawTarot();
  else if(e.target.closest('#btnDrawRune'))drawRune();
  else if(e.target.closest('#btnDrawYijing'))drawYijing();
  else if(e.target.closest('#btnDrawGeo'))drawGeo();
  else if(e.target.closest('#btnLaunch'))launch();
 });
 document.addEventListener('input',e=>{if(e.target.id==='f-keys'||e.target.id==='f-default-rpm')renderKeysCount();});
 document.addEventListener('click',e=>{
  const card=e.target.closest('.img-card');if(!card)return;
  const parent=card.closest('[data-pick]');if(!parent)return;
  parent.querySelectorAll('.img-card').forEach(c=>c.classList.remove('selected'));
  card.classList.add('selected');
  state.picks.images[parent.dataset.pick]=card.dataset.val;
  savePicks();clearDayValidationCache();
 });
 $('#btnKeysTab').onclick=()=>{if(state.currentView!=='wizard')showView('wizard');goTo(0);};
 $('#btnHome').onclick=()=>{if(state.report&&state.calc){showView('report');renderReport();}else{showView('wizard');goTo(0);}};
 $('#btnNewQuestion').onclick=openNewQuestion;
 $('#btnConfirmNewQ').onclick=confirmNewQuestion;
 $('#btnDlReport').onclick=()=>{download('Rapport_'+(state.profile.prenomUsuel||'vous')+'.html',buildReportHTML(),'text/html;charset=utf-8');toast('Rapport téléchargé.','ok');};
 $('#btnDlDossier').onclick=()=>{download('EsotherIA_dossier_'+new Date().toISOString().slice(0,10)+'.json',JSON.stringify(dossier(),null,2),'application/json');toast('Dossier téléchargé.','ok');};
 $('#fImport').onchange=e=>{const f=e.target.files&&e.target.files[0];if(f)importDossier(f);e.target.value='';};
 $('#btnWipe').onclick=wipeAll;
 $('#btnReset').onclick=()=>{if(!confirm('Recommencer une nouvelle analyse ?'))return;delLS(LS.report);delLS(LS.reportAt);state.report=null;goTo(0);showView('wizard');};
 $('#btnAbort').onclick=()=>{if(state.report&&Object.keys(state.report.sciences||{}).length){writeLS(LS.report,state.report);showView('report');renderReport();}else toast('Rien à afficher.','warn');};
 document.addEventListener('keydown',e=>{
  if(state.currentView==='report'&&!e.target.matches('input,textarea,select')){
   if(e.key==='ArrowLeft'){e.preventDefault();navigateDate(-1);}
   else if(e.key==='ArrowRight'){e.preventDefault();navigateDate(1);}
  }else if(state.currentView==='wizard'&&!e.target.matches('input,textarea,select')){
   if(e.key==='ArrowRight'){e.preventDefault();goNext();}
   else if(e.key==='ArrowLeft'){e.preventDefault();goPrev();}
  }
 });
}
function launch(){
 for(let i=0;i<SLIDES.length-1;i++){if(SLIDES[i].validate&&!validateSlide(i)){goTo(i);return;}}
 if(!$('#f-consent').checked){toast('Cochez la case de compréhension.','err');return;}
 applyKeys();
 if(!AI.count()){toast('Sans clé Agnes, aucune analyse ne peut être générée.','err');goTo(0);return;}
 runAnalysis();
}

/* ==================== INIT (avec fallback) ==================== */
function init(){
 try{
  state.profile=readLS(LS.profile,{});
  state.picks=Object.assign(blankPicks(),readLS(LS.picks,{}));
  if(!state.picks.images)state.picks.images={};
  normalizePicks();
  state.report=readLS(LS.report,null);
  if(state.report){
   state.report.archive=state.report.archive||{};
   state.report.predictions=state.report.predictions||{};
   state.report.validationHistory=Array.isArray(state.report.validationHistory)?state.report.validationHistory:[];
   state.report.knownDays=state.report.knownDays||{};
   if(!Object.keys(state.report.archive).length&&state.report.sciences&&Object.keys(state.report.sciences).length){
    const legacyDate=state.report.date||dateKey(new Date(state.report.at||Date.now()));
    state.report.archive[legacyDate]={sciences:state.report.sciences,syntheses:state.report.syntheses||{}};
    state.report.date=legacyDate;
   }
  }
  state.selectedSciences=readLS(LS.sel,null);
  state.retroResults=state.report&&state.report.retroResults?state.report.retroResults:null;

  initTrial();checkDailyWipe();
  const keys=readLS(LS.keys,[]);AI.setKeys(keys);
  const cf=readLS(LS.cfg,null);if(cf)AI.setCfg(cf);

  // Render slides - critical path
  renderSlides();
  hydrate();
  bind();
  updateModeBadge();

  let c=null;
  try{c=computeAll();}catch(e){console.error('computeAll:',e);}
  state.calc=(c&&c.ok)?c:null;

  // Show wizard or report
  if(state.report&&state.report.sciences&&state.calc){
   state.reportDate=state.report.date?new Date(state.report.date+'T12:00:00'):new Date(state.report.at||Date.now());
   state.calendarMonth=state.reportDate.getMonth();
   state.calendarYear=state.reportDate.getFullYear();
   showView('report');
   renderReport();
  }else{
   state.report=null;
   showView('wizard');
   goTo(0);
  }
  if(keys.length)toast('Clés Agnes chargées.','warn');
 }catch(e){
  console.error('Init error:',e);
  showBootError(e.message||String(e));
  // Ensure a slide is visible so user isn't stuck
  const deck=$('#deck');
  if(deck&&!deck.querySelector('.slide.active')){
   const fb=deck.querySelector('#bootFallback');
   if(fb)fb.classList.add('active');
  }
 }
}

/* Watchdog: warn if deck remains empty */
setTimeout(()=>{
 const deck=document.getElementById('deck');
 if(deck && deck.children.length===0){
  showBootError('Slides non rendues après 3s');
 }
},3000);

if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',()=>{try{init();}catch(e){showBootError(e.message);}});
else{try{init();}catch(e){showBootError(e.message);}}
})();
</script>
</body>
</html>